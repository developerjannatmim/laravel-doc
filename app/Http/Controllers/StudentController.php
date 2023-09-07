<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

	/******************** start for students route ****************/
	// public function index()
	// {
	// 	$students = DB::table('students')
	// 		->get();

	// 	return view('students.index', compact('students'));

	// 	// return response()->json([
	// 	//     $students,
	// 	// ]);
	// }

	// public function createStudent()
	// {
	// 	$student = DB::table('students')
	// 		->insert([
	// 			[
	// 				'name' => 'lam',
	// 				'email' => 'lam@gmail.com',
	// 				'age' => 22,
	// 				'city' => 1
	// 			],
	// 			[
	// 				'name' => 'mim',
	// 				'email' => 'mim@gmail.com',
	// 				'age' => 23,
	// 				'city' => 3
	// 			],
	// 			[
	// 				'name' => 'akshara',
	// 				'email' => 'akshara@gmail.com',
	// 				'age' => 26,
	// 				'city' => 2
	// 			],
	// 			[
	// 				'name' => 'asha',
	// 				'email' => 'asha@gmail.com',
	// 				'age' => 28,
	// 				'city' => 4
	// 			],
	// 			[
	// 				'name' => 'akshara',
	// 				'email' => 'akshara@gmail.com',
	// 				'age' => 29,
	// 				'city' => 2
	// 			]
	// 		]);

	// 	if ($student) {
	// 		return 'data added successfully.';
	// 	} else {
	// 		return 'data added failed.';
	// 	}
	// }

	// public function showStudent(string $id)
	// {
	// 	$student = DB::table('students')
	// 		->where('id', $id)
	// 		->get();

	// 	return view('students.show', compact('student'));
	// 	// return response()->json([
	// 	//     $student,
	// 	// ]);
	// }

	// public function editStudent(string $id)
	// {
	// 	$student = DB::table('students')
	// 		->where('id', $id)
	// 		->update([

	// 		]);
	// 	return view('students.edit', compact('student'));
	// }

	// public function destroyStudent(string $id)
	// {
	// 	$student = DB::table('students')
	// 		->where('id', $id)
	// 		->delete();
	// 	return redirect()->back()->with(['success' => 'deleted successfully']);
	// }

	/******************** end for students route ****************/



	public function index()
	{
		$students = Student::orderBy('id')->paginate(5);
		return view('students.index', compact('students'));
	}

	public function create()
	{
		return view('students.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'age' => 'required',
			'city' => 'required',
		]);

		Student::create($request->all());
		return redirect()->route('students.index')
		->with(['message' => 'data added successfully']);

	}

	public function show(Student $student)
	{
		return view('students.show', compact('student'));
	}

	public function edit(Student $student)
	{
		return view('students.edit', compact('student'));
	}


	public function update(Request $request, Student $student)
	{
		$request->validate([
			'name' => 'required|max:30',
			'email' => 'required|email|max:20',
			'age' => 'required',
			'city' => 'required|integer'
		]);

		if( $student->update($request->all()) ) {
	    return redirect()->route('students.index')
	    ->with('Success', 'student updated successfully');
	    }

	}

	public function destroy(Student $student)
	{
		$student->delete();
		return redirect()->back()->with(['success' => 'deleted successfully']);

	}




}