@extends('layouts.app')

@section('title')
    {{ $data->name }}
@endsection


@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-6">
                <img src="../../img/slider3.jpg" class="img-fluid" style="border-radius:20px 0px 0px 20px;height: 100%;background-size: cover;  object-fit: cover;object-position: center">
            </div>
            <div class="col-6">
                <p class="row">{{ $data->name }}</p>
                <p class="row">{{ $data->genre['name'] }}</p>
                <p class="row">{{ $data->pubsliher['name'] }}</p>
                <p class="row">{{ $data->name }}</p>
                <p class="row">{{ $data->name }}</p>
                <p class="row">{{ $data->name }}</p>

            </div>
        </div>
    </div>

@endsection
