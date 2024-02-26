@extends('layouts.layout')

@section('content')
<section id="banner">
    <div class="container">
        <h1>Question</h1>
    </div>
</section>

<section id="question">
    <div class="container"> 
        <div class="question-left">
            <h2>{{$question->title}}</h2>
            <p>{{$question->text}}</p>
        </div>
        <div class="question-right">
            <div class="user-avatar">
                <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">by <a href="">slavo</a></div>
        </div>
    </div>
</section>

<section id="answers">
    <div class="container">
      <h2>{{$answers->count()}} Responses:</h2>
      @foreach ($answers as $answer)       
        <div class="answer">
            <div class="answer-right">
                <p>{{$answer->text}}</p>
            </div>
            <div class="answer-left">
                <div class="user-avatar">
                    <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">by <a href="">slavo</a></div>
            </div>
        </div>
      @endforeach
    </div>
</section>
@endsection



{{-- <h2>Answer:</h2>
<ul>
  @foreach ($answers as $answer)
      <li>
        {{$answer->text}}
      </li>
  @endforeach
</ul> --}}