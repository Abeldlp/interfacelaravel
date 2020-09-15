@extends('welcome')

@section('content')
    <div class="container">
        <h1>This is the customer list</h1>
        @foreach($customers as $customer)
            <div>
                <a href="{{'/customers/'.$customer->id}}">{{$customer->name}}</a>
            </div>
        @endforeach
    </div>
@endsection
