<?php

namespace Database\Seeders;

use App\Models\Houses;
use App\Models\Types;
use Database\Factories\TypesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $type=['Apartment','House','Villa','Bungalow','Cottage','Chalet','Townhouse','Condo','Loft','Farmhouse','Mansion','Dorm','Studio','Other'];

       foreach($type as $t){
           Types::create([
               'name'=>$t,
               'created_at'=>now(),
                'updated_at'=>now(),
           ]);
       }
}
}
