@extends('layouts.app')

@section('title')
    {{ $data->login }}
@endsection


@section('content')
    <div class="container  ">
    <div class="row bg-white rounded-pill">
    <a class="btn btn-primary rounded-pill header_button" role="button" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Выйти</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

        {{ $data->login }}
    </div>
    <div class="row  mt-5 d-flex flex-column-reverse d-xxl-flex flex-xxl-row justify-content-between">
        <div class="col-xxl-8 rounded-pill">
            <h2 class="text-center text-white">Мои заказы</h2>
            @foreach($dataOrder as $el)
                <div class="row bg-white rounded-3 shadowmy text-center p-3 mt-4 mb-4 d-flex  flex-wrap">
                    <p class="col-lg-4 m-0  align-self-center">Дата:{{ $el->data }}</p>
                    <p class="col-lg-4 m-0  align-self-center">{{ $el->price }} руб</p>
                    <a  href="#" class="col-lg-4 m-0  align-self-center"><button class="btn btn-primary">Поподробней</button></a>
                </div>
            @endforeach

            {{$dataOrder->links('vendor.pagination.bootstrap-4')}}

        </div>

        <div class="col-xxl-3 bg-white rounded-2 p-2 text-start ">
            <h5 class="text-black text-center ">Настройки</h5>
            @auth()
            <div class="row ">
                <p class="col ">Смена ника</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            <div class="row">
                <p class="col">Смена авы</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            <div class="row">
                <p class="col">Смена email</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            <div class="row">
                <p class="col">Смена пароля</p>
                <a  href="#" class="col"><button class="btn btn-primary">Изменить</button></a>
            </div>
            @endauth
        </div>
    </div>
    </div>
@endsection
