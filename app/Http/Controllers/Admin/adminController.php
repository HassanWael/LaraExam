<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\History;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.manage_users',compact('users'));
    }
    public function manage_admins()
    {

        $users=User::all();
        return view('admin.manage_users',compact('users'));
    }
    public function manage_exams()
    {
        $exams=Exam::all();
        return view('admin.manage_exams',compact('exams'));
    }
    public function manage_results()
    {
        $results=History::all();
        return view('admin.manage_results',compact('results'));
    }
    public function manage_questions()
    {
        $questions=Question::all();
        return view('admin.manage_questions',compact('questions'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>'admin',
        ]);

        return redirect()->route('manage_admins')
                        ->with('success','User created successfully.');

    }

}
