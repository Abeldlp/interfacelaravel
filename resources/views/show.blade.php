@extends('welcome')

@section('content')
    <div>
        <h1>name: {{$customer->name}}</h1>
        <h1>age: {{$customer->age}}</h1>
    </div>
@endsection
