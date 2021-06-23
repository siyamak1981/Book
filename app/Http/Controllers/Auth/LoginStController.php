<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plan;
use App\Models\Book; 

class LoginStController extends Controller
{
    public function index()
    {
        return view('auth.plan-login');
    }

    public function checkAuth(Request $request)
    {
        $student = DB::table('students')
            ->where('national_code','=',$request->username)
            ->where('national_code','=',$request->password)
            ->first();
            // $target = Target::all();
            $books = Book::all();
            // $plan = Plan::with('target','student')->get();
            $plans = DB::table('plans') 
        ->join('students', 'students.id', '=', 'plans.student_id')
        ->join('targets', 'targets.id', 'plans.target_id')
        ->join('books','plans.book_id1','books.id')
        ->select('plans.*', 'students.id', 'students.fname', 'students.lname','books.name','targets.title')
        ->groupBy('plans.id')
        ->get();
        // dd($plans);
        if ($student) {
            return view('profile.dashboard', compact('student', 'plans', 'books'));
        }else{
            return redirect('/login-plan');
        }
    }
}
