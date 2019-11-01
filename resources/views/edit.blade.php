@extends('layout')

@section('content')
<h1>PET UPDATE FORM - {{$pet->name}}</h1>

    <form action="{{action('AdminController@update', $pet->id)}}" method="post">
        
        <label for="name">Pet Name: </label>
        <input type="text" name="name" id="name" value={{$pet->name}}><br>

        <label for="breed">Breed: </label>
        <input type="text" name="breed" id="breed" value={{$pet->breed}}><br>

        <label for="weight">Weight: </label>
        <input type="number" name="weight" id="weight" value={{$pet->weight}}><br>

        <label for="Age">Age: </label>
        <input type="number" name="age" id="age" value={{$pet->age}}><br>

        <input type="submit" value="submit">

        @csrf
    </form>

@endsection