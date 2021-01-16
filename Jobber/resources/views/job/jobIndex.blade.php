@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<div class="inner">
    <div class="container">
        <header class="mx-auto text-center">
            <h2 class="badge badge-secondary">{{$title}}</h2>
        </header>
        <div class="col-md text-center mx-auto">
            <form action="/search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search for job titles, cities or companies">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection