<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
        // $teacher = Teacher::with('teacherDetail')->first();
        // dd($teacher->toArray());

        // $teacherdetails = TeacherDetail::with('teacher')->first();
        // dd($teacherdetails->toArray());

        // $user = User::with(['posts', 'product'])->find(3);
        // return $user;

        $result = DB::table('teachers')
        ->join('teacher_details', 'teachers.id', '=', 'teacher_details.teacher_id')
        ->select('teachers.name as teacher_name', 'teacher_details.city as teacher_city')
        ->get();
        return $result;

    }


}
