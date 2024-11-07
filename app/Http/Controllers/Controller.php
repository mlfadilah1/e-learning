<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function welcome()
    {
        // Fetch all teachers from the database
        $teachers = DB::table('instructors')
            ->join('users', 'instructors.user_id', '=', 'users.id')
            ->select('instructors.bio', 'users.name', 'users.foto')
            ->get();
        $courses = Course::with('instructor.user')->get();

        // Return the welcome view with the teachers data
        return view('welcome', compact('teachers', 'courses')); // Assuming your welcome view is named 'welcome.blade.php'
    }
    //detail course
    public function detail($id)
    {
        // Controller
        $course = Course::with(['contents.category', 'instructor.user', 'contents.section',])->find($id);
        return view('customer.course.index', compact('course'));
    }
}
