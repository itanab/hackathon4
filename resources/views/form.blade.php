@extends('layout')

@section('content')
    <h3>PET REGISTRATION FORM</h3>

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
