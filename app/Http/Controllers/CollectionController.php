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

        //$res = $users->toArray();
        //$res = $users->all();
        //$res = $users->pluck('email');
        // $res = $users->each(function($user) {
            //     //$user->username = 'a';
            //     //$user->year = date('Y');
            //     unset($user->created_at);
            //     unset($user->updated_at);
            
            // });
            
            // $res = $users->search(function($user) {
            //     return $user->email == 'mim@gmail.com';
                
            // });
                
            $users = User::get();
            $output = $users->where('age', '>', 18)
            ->where('name', 'Mim')
            ->where('email', 'mim@gmail.com');

            $output = $output->each(function($user) {
                $user->username = 'a';
                $user->year = date('Y');
                unset($user->created_at);
                unset($user->updated_at);
                unset($user->email_verified_at);
            });

            dd($output);


























    }
}
