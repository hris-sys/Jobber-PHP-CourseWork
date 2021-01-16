@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="inner">
        <div class="container">
            <header class="mx-auto text-center">
                <h2 class="badge badge-secondary">{{$title}}</h2>
            </header>
            {!! $text !!}
        </div>
    </div>
@endsection