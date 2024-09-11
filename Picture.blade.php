@extends('layouts.app')

@section('title', 'Picture Page')

@section('content')
    <div class="container">
        <h2>Pictures</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="path_to_image.jpg" class="card-img-top" alt="Picture">
                </div>
            </div>
        </div>
    </div>
@endsection
