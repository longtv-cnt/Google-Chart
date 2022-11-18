<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=DB::table('types')->join('houses','types.id','=','houses.type_id')
        ->select(DB::raw('count(houses.type_id) as total,types.name as type'))
        ->groupBy('type' )->get()->toArray();
//       dd($result);
        $result1=json_decode(json_encode($result),true);

print_r($result);
      return view('chart.productsByTypes',compact('result1'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function show(Types $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function edit(Types $types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Types $types)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function destroy(Types $types)
    {
        //
    }
}
