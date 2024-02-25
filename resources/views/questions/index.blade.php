<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Questions</title>
</head>
<body>
  @extends('layouts.layout')


  @section('content')
    <section id="banner">
      <div class="container">
        <h1>Questions</h1>
      </div>
    </section>

  <section id="questions">
    <div class="container">
      @foreach ($questions as $question)
      <div class="question">
          <div class="question-left">
              <div class="question-name">
                <a href="/questions/{{$question->id}}">{{$question->title}}</a>
              </div>

              <div class="question-info">
                  asked at {{$question->created_at}} by<a href="">slavo</a>
              </div>
          </div>

          <div class="question-right">
              <div class="question-stat">
                @if ($question->answer)
                  <span>{{$question->answer->count()}}</span>
                  <label>responses</label>   
                @else
                  <span>No response</span>
                @endif
                  
              </div>
          </div>
      </div>
      @endforeach    
    </div>
  </section>
  @endsection

</body>
</html>


{{-- <h1>Questions:</h1>
<ul>
  @foreach ($questions as $question)
      <li>
       <a href="/questions/{{$question->id}}">{{$question->title}}</a> 
      </li>
  @endforeach
</ul> --}}