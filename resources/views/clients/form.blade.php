@extends('layout')

@section('content')
    @if (isset($client))
        <?php
            $first_name = $client->first_name;
            $surname = $client->surname;
            $action = action('ClientController@update', $client->id);
            $method = '<input type="hidden" name="_method" value="put" />';
        ?>
    @else
        <?php
            $first_name = '';
            $surname = '';
            $action = action('ClientController@store');
            $method = '';
        ?>
    @endif
    <h1>CLIENT REGISTRATION FORM</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{$action}}" method="post">
        {!! $method !!}
        <label for="name">First Name: </label>
        <input type="text" name="first_name" id="first_name" value={{$first_name}}><br>

        <label for="breed">Last Name: </label>
        <input type="text" name="surname" id="surname"value={{$surname}}><br>

        <input type="submit" value="submit">

        @csrf
    </form>
@endsection