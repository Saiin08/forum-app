 @extends('layouts.layout')
  @section('content')
      <section class="container">
        <form action="{{route('questions.create')}}" method="post">
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