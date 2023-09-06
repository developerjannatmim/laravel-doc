<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')
        ->get();

        return view('students.index', compact('students'));

        // return response()->json([
        //     $students,
        // ]);
    }

    public function createStudent()
    {
        $student = DB::table('students')
        ->insert([
        ['name' => 'akdhara',
            'email' => 'akdhara@gmail.com',
            'age' => 20,
            'city' => 1
        ]
    ]);

        if($student){
            return 'data added successfully.';
        }else{
            return 'data added failed.';
        }
    }

    public function showStudent(string $id)
    {
      $student = DB::table('students')
      ->where('id', $id)
      ->get();

      return view('students.show', compact('student'));
        // return response()->json([
        //     $student,
        // ]);
    }

    public function editStudent(string $id)
    {
      $student = DB::table('students')
      ->where('id', $id)
      ->update([
        
      ]);
      return view('students.edit', compact('student'));
    }
}
