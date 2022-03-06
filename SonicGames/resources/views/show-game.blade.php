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
                @if($data->amount>2000)
                    <p class="row d-inline-block">Кол-во ключей:<span class="text-success">Много</span></p>
                @endif
                @if($data->amount>1000 && $data->amount<2000)
                    <p class="row d-inline-block">Кол-во ключей:<span class="text-info">Нормально</span></p>
                @endif
                @if($data->amount<1000)
                    <p class="row d-inline-block">Кол-во ключей:<span class="text-danger">Мало</span></p>
                @endif
                <p class="row">{{ $data->info }}</p>
                <p class="row">Цена: {{ $data->price- $data->discount }} руб.</p>
                @if($data->discount!=null)
                    <p class="row">Скидка:{{ $data->discount}} руб</p>
                @endif
            </div>
        </div>
    </div>

@endsection
