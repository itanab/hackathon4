@extends('layout')

@section('content')
    <h1>PET REGISTRATION FORM</h1>

    <form action="{{action('AdminController@store')}}" method="post">
        
        <select id="client_id" name="client_id" >
            @foreach($clients as $client) :
                <option value="{{$client->id}}"> {{$client->first_name}}  {{$client->surname}} </option>
            @endforeach
        </select><br>

        <label for="name">Pet Name: </label>
        <input type="text" name="name" id="name"><br>

        <label for="breed">Breed: </label>
        <input type="text" name="breed" id="breed"><br>

        <label for="weight">Weight: </label>
        <input type="number" name="weight" id="weight"><br>

        <label for="Age">Age: </label>
        <input type="number" name="age" id="age"><br>

        <input type="submit" value="submit">

        @csrf
    </form>

@endsection