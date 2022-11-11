<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Students::select('city', DB::raw('count(*) as total'))
            ->groupBy('city')
            ->get()->toArray();

        // $chartĐata = '';
        // foreach ($result as $list) {
        //     $chartĐata .= "['" . $list->city . "'," . $list->total . "],";
        //     $chartĐata = rtrim($chartĐata, ',');

        // }
        

        return view('chart.chartofcity', compact('result'));
    }
}
