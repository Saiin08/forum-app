 @extends('layouts.layout')
  @section('content')
      <section class="container">
        <form action="{{route('questions.create')}}" method="post">
          @csrf
          
          <label for="title">Title:</label>
          <input type="text" name="title" value="{{old('title')}}">
          <br><br>
          <label for="text">Question:</label>
          <textarea name="text" type="text" cols="30" rows="10" value="{{old('text')}}"></textarea>
          <br><br>
          <button type="submit">Submit</button>
        </form>
      </section>
  @endsection