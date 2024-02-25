<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::query()
        ->get();

        return view('questions.index',compact('questions'));
    }

    public function show($id){

        $question = Question::findOrFail($id);

        $answers = Answer::where('question_id',$id)->get();

        return view('questions.show',compact('question','answers'));

    }
}
