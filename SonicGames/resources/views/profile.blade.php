@extends('layouts.app')

@section('title')
    Профиль
@endsection


@section('content')
    <div class="container bg-white rounded-pill">
    <a class="btn btn-primary rounded-pill header_button" role="button" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Выйти</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </div>
@endsection
