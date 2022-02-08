@extends('layouts.app')

@section('title')
    {{ $data->name }}
@endsection


@section('content')
    <div class="container bg-white  rounded-3">
        <div class="row">
            <div class="col-6 p-0">
                <img src="/../img/slider3.jpg" class="img-fluid  rounded-3" style="height: 100%;background-size: cover;  object-fit: cover;object-position: center">
            </div>
            <div class="col-6 p-4">
                <p class="row"> {{ $data->name }}</p>
                <p class="row">Жанр: {{ $data->genre['name'] }}</p>
                <p class="row">Издатель: {{ $data->publisher['name'] }}</p>
                <p class="row">Платформа: {{ $data->platform }}</p>
                <p class="row">Дата релиза: {{ $data->release }}</p>
                <p class="row">Кол-во ключей{{ $data->amount }}</p>
                <p class="row">{{ $data->info }}</p>
                <p class="row">Цена: {{ $data->price }} руб.</p>
            </div>
        </div>
    </div>

@endsection
