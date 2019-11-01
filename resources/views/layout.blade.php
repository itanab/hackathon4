<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
        <header>
            <h1>Welcome to St. Hector's Veterinary Clinic</h1>
            <a href="{{action('AdminController@create')}}">Add Pet</a>
            <a href="{{action('ClientController@create')}}">Add Client</a>
        </header>
        <div id="app">  @yield('content')</div>
    </body>
</html>
