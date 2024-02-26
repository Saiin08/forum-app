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
    
    public function create(Request $request) {
        $this->validate($request,[
            'title'=>'required',
            'text'=>'required',
        ],[
            'title.required'=>'Title is required',
            'text.required'=>'Text is required',
        ]);

        $data=$request->all();

        $new_question = New Question;
        $new_question->title=$data['title'];
        $new_question->text=$data['text'];
        $new_question->save();

        session()->flash('success_message', 'Your question has been posted!');

        return redirect()->route('questions.index');
    }
}
