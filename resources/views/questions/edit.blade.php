 @extends('layouts.layout')
  @section('content')

    @if (count($errors) > 0)
      <div>
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
              {{ $error }}
          </div>
          @endforeach
      </div>
    @endif

      <section class="container">
        <form action="{{route('questions.save',['id'=>$question->id])}}" method="post">
          @method('PUT')
          @csrf
          
          <label for="title">Title:</label><br>
          <input type="text" name="title" value="{{old('title')}}">
          <br>
          <label for="text">Question:</label><br>
          <textarea name="text" type="text" cols="30" rows="5" value="{{old('text')}}"></textarea>
          <br><br>
          <button type="submit">Submit</button>
        </form>
      </section>

  @endsection