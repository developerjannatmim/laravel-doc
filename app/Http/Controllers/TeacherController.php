<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller {
    public function index() 
		{
			$teacher = Teacher::all();
			return response()->json([
				$teacher,
			]);
    }

    public function create() 
		{
			return view('teachers.create');
    }

    public function store( Request $request ) 
		{
			$teacher  = Teacher::create( [
				'name' => $request->name,
				'email' => $request->email,
				'phone' => $request->phone,
		] );

		$teacher->teacherDetail()->create( [
				'alternate_phone' => $request->alternate_phone,
				'city' => $request->city,
				'address' => $request->address,
		] );

		return redirect( 'teachers' )->with( 'message', 'Added Successfully' );

        // Teacher::create( [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone
        // ] );
        // return redirect( 'teachers' )->with( 'message', 'Added Successfully' );
    }

		public function edit(Teacher $teacher) 
		{
			return view('teachers.edit', compact('teacher'));
		}

    public function update( Teacher $teacher, Request $request ) 
		{
        $teacher->update( [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ] );

        $teacher->teacherDetail()->update( [
            'alternate_phone' => $request->alternate_phone,
            'city' => $request->city,
            'address' => $request->address
        ] );

        return redirect( 'teachers' )->with( 'message', 'Teacher and Teacher Details Updated' );
    }

    // public function edit( $teacher_id ) 
		// {
    //     $teacher = Teacher::findOrFail( $teacher_id )->teacherDetail;
    //     return view( 'teacher.edit', compact( 'teacher' ) );
    // }

    public function destroy( $teacher_id ) 
		{
        Teacher::findOrFail( $teacher_id )->delete();
        return redirect( 'teachers' )->with( 'message', 'Daleted Successfully' );
    }
}
