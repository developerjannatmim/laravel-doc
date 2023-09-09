<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Eloquent;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Chunk;
use Str;

class EloquentController extends Controller
{
    public function show()
    {
        $test = [];
        $test = Eloquent::all();
        // $test = Eloquent::withTrashed()
        // ->where('id', 5)
        // ->restore();
        dd($test);

        return view('test', ['tests' => $test]);

        // $test = Eloquent::find(2);
        // $test->fill(['name' => 'Amsterdam to Frankfurt']);
        // $test->save();
        // //dd($test);
        // return view('test', ['tests' => $test]);


        //$test = Eloquent::where('city', 'dhaka')->orderBy('name')->get();
        //**Chunking Data **/
        // Eloquent::chunk(3, function($tests) {
        //     echo "chunk the data";
        //     echo '<br>';
        //     foreach($tests as $ts){
        //         echo $ts->name;
        //         echo '<br>';
        //     }
        // });

        //$test = Eloquent::find(1);
        //$test = Eloquent::where('city', 'dhaka')->first();
        //$test = Eloquent::firstWhere('city', 'jessore');
        // $test = Eloquent::where('marks', '>', 100)->firstOr(function() {
        //     echo 'data not found!!';
        // });
        // $test = Eloquent::firstOrCreate(
        //     ['name' => 'mim'],
        //     [
        //         'email' => 'doll@gmail.com',
        //         'city' => 'delhi',
        //         'marks' => 85
        //     ]
        // );

        // $test = Eloquent::firstOrNew(
        //     ['name' => 'mimi'],
        //     [
        //         'email' => 'mimi@gmail.com',
        //         'city' => 'delhi',
        //         'marks' => 85
        //     ]
        // );
        // $test->save();

            // $test = Eloquent::create([
            //     'name' => 'lamici',
            //     'email' => 'lamicii@gmail.com',
            //     'city' => 'khulna',
            //     'marks' => 76
            // ]);




        // $test->name = $name;

        // $test = new Eloquent;
        // $test->name = 'samin';
        // $test->email = 'samin@gmail.com';
        // $test->city = 'khulna';
        // $test->marks = 80;
        // $test->save();

        // $name = 'samina';
        // $email = 'samina@gmail.com';
        // $city = 'khulna';
        // $marks = 76;
        // $test = new Eloquent;
        // $test->email = $email;
        // $test->city = $city;
        // $test->marks = $marks;
        // $test->save();

        // $test = Eloquent::find(10);
        // $test->name = 'mariya';
        // $test->email = 'mariya@gmail.com';
        // $test->city = 'narail';
        // $test->marks = 60;
        // $test->save();

        /** Mass Update **/
        // $test = Eloquent::where('city', 'jessore')->update(
        //     ['marks' => 100]
        // );

        // $test = Eloquent::updateOrCreate(
            //     ['name' => 'hp'],
            //     [
                //         'email' => 'hp@gmail.com',
                //         'city' => 'khulna',
                //         'marks' => 70
                //     ]
                // );

                // $test = Eloquent::find(5);
                // $test->delete();

                // $test = Eloquent::destroy(7);
                // dd($test);

                // $test = Eloquent::where('city', 'narail')->delete();
        // dd($test);

        /** create scure password **/
        //$password = Str::password(10) or, 'password' => Hash::make($password);


    }
}
