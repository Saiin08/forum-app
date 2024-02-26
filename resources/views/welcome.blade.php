<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        @extends('layouts.layout')
        @section('name')
        <h1 class="title">Forum App</h1>
        <a href="/questions">Questions</a>          
        @endsection
    </body>
</html>
