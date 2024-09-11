@extends('layouts.app')

@section('title', 'Item Page')

@section('content')
    <div class="container">
        <h2>Items</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="path_to_image.jpg" class="card-img-top" alt="Item Image">
                    <div class="card-body">
                        <h5 class="card-title">Item Name</h5>
                        <p class="card-text">Price: $XX.XX</p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
@endsection
