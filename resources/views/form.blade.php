<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    


@extends('layout')

@section('content')
    <h1>PET REGISTRATION FORM</h1>

    <form action="{{action('AdminController@store')}}" method="post">
        
        <select id="client_id" name="client_id" >
            @foreach($clients as $client) :
                <option value="{{$client->id}}"> {{$client->first_name}}  {{$client->surname}} </option>
            @endforeach
        </select><br/><br>

        
        <label for="name">Pet Name: </label>
        <input type="text" name="name" id="name" style="{{ $errors->has('name') ? 'border: 1px solid red' : ''}}" value="{{ old('name') }}"> <br/>
        
        <span class="text-danger">{{ $errors->first('name') }}</span><br>
        

        <label for="breed">Breed: </label>
        <input type="text" name="breed" id="breed" style="{{ $errors->has('breed') ? 'border: 1px solid red' : ''}}" value="{{ old('breed') }}"><br>
        <span class="text-danger">{{ $errors->first('breed') }}</span><br>

        <label for="weight">Weight: </label>
        <input type="number" name="weight" id="weight" style="{{ $errors->has('weight') ? 'border: 1px solid red' : ''}}" value="{{ old('weight') }}"><br>
        <span class="text-danger">{{ $errors->first('weight') }}</span><br>

        <label for="Age">Age: </label>
        <input type="number" value="{{ old('age') }}" name="age" id="age"><br>
        <span class="text-danger">{{ $errors->first('age') }}</span><br>

        <input type="submit" value="submit">

        @csrf
    </form>

@endsection

</body>
</html>