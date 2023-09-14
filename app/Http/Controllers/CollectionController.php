<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function items()
    {
        // $items = collect(['one','two','three','a']);
        // $result = $items->map( function ($item){
        //     return strtoupper($item);
        // });
        // dd($result);


        // $items = collect([
        //     ['name' => 'apple', 'price' => 100, 'sale' => 150],
        //     ['name' => 'banana', 'price' => 200, 'sale' => 50],
        //     ['name' => 'mango', 'price' => 500, 'sale' => 70],
        //     ['name' => 'multa', 'price' => 300, 'sale' => 120],
        // ]);

        // //$collcetions = $items;
        // dd($items->avg('sale'));

            $users = User::get();
            //$res = $users->toArray();
            //$res = $users->all();
            //$res = $users->pluck('email');
            $res = $users->each(function($user) {
                return $user->username = 'a';
            });

            dd($res);


























    } 
}
