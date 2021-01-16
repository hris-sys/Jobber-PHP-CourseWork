@extends('layouts.app')

@section('title', 'Job Search')

@section('content')
<div class="inner">
    @if (count($results) === 0)
    <p class="display-4 text-center">Sorry, no results were found...</p>
    <div class="col-m text-center mx-auto">
        <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Search for job titles, cities or companies">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>
        </form>
    </div>
    @endif
    <div class="container d-flex">
        @foreach ($results as $classRes)

        @foreach ($classRes as $key => $value)

        @if ($key == "title")
        @php $currentTitle = $value; @endphp
        @elseif ($key == "name")
        @php $currentCity = $value; @endphp
        @elseif ($key == "image")
        @php $currentImage = $value; @endphp
        @else
        @php $currentContent = $value; @endphp
        @endif

        @endforeach

        <div class="card" style="width: 18rem;">
            <img src="{{$currentImage}}" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">{{$currentTitle}}</h5>
                <p class="card-text">{{$currentContent}}t</p>
                <p class="card-text">{{$currentCity}}</p>
                <a href="#" class="btn btn-primary">Visit</a>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection