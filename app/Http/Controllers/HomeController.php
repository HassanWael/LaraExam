<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Exam::all();
        return view('choice',compact('categories'));
    }
    public function exams($exam){

        $question=Question::all()->where('exam_id',$exam)->take(5);

        return view('computerHtml',compact('question','exam'));
    }
    public function examfetch($exam){
        $question=Question::all()->where('exam_id',$exam);
        return $question->toJson();
    }
    public function result($examId){
        $correct_answers = "";
        $question=Question::all()->where('exam_id',$examId);
        foreach ($question as $key => $value) {
            $correct_answers.=$value['answer_correct'];
        }

        return view('result',compact('correct_answers'));
    }

}
