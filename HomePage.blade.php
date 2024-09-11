@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="bg-primary text-white text-center py-5">
        <h1>Welcome to the Home Page</h1>
        <nav>
            <a href="{{ route('items') }}" class="btn btn-light">Items Page</a>
            <a href="{{ route('pics') }}" class="btn btn-light">Pictures Page</a>
        </nav>
    </div>
@endsection
