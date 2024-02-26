<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ask question</title>
</head>
<body>
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
</body>
</html>