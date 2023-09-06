<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function showCity()
    {
        $cities = DB::table('cities')
        ->where('id', 1)
        ->get();

        return response()->json([
            $cities,
        ]);
    }

    public function createCity()
    {
        $city = DB::table('cities')
        ->insert([
            [
                'city_name' => 'Barishal',
            ],
            [
                'city_name' => 'Dhaka',
            ],
            [
                'city_name' => 'Khulna',
            ],
            [
                'city_name' => 'Pabna',
            ],
            [
                'city_name' => 'Rajshahi',
            ],
            [
                'city_name' => 'Rangamati',
            ],
            [
                'city_name' => 'Sylhet',
            ],
        ]);
        if($city){
            return 'city added successfully.';
        }else{
            return 'city added failed.';
        }
    }


}
