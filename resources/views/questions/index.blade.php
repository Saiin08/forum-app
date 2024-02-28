  @extends('layouts.layout')


  @section('content')
    <section id="banner">
      <div class="container">
        <h1>Questions</h1>
      </div>
    </section>

    <div class="ask">
      <a href="{{route('questions.ask')}}">Ask a question</a>
    </div>

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

              <div class="edit">
                <a href="{{route('questions.edit',['id'=>$question->id])}}">Edit</a>
              </div>
              
              <div class="delete">
                <form action="{{route('questions.delete',['id'=>$question->id])}}" method="POST">
                  @method('DELETE')
                  @csrf

                  <button type="submit" onclick="return confirm('Remove question?')">Delete</button>

                </form>
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


{{-- <h1>Questions:</h1>
<ul>
  @foreach ($questions as $question)
      <li>
       <a href="/questions/{{$question->id}}">{{$question->title}}</a> 
      </li>
  @endforeach
</ul> --}}