@extends('layouts.app')

@section('content')
    <form action="/accommodations" method="post">
        {{ csrf_field() }}
        
        <p>
            Title: <input type="text" name="title">
        </p>

        <p>
            Description: <input type="text" name="description">
        </p>

        <input type="submit" value="Save">
    
    </form>

@endsection
