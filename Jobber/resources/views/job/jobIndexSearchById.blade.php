@extends('layouts.app')

@section('title', 'Job Search')

@section('content')
<div class="inner">
    <div class="container lg">
        @foreach ($results as $classRes)

        @foreach ($classRes as $key => $value)

        @if ($key == "title")
        @php $currentTitle = $value; @endphp
        @elseif ($key == "cityName")
        @php $currentCity = $value; @endphp
        @elseif ($key == "jobId")
        @php $currentJobId = $value; @endphp
        @elseif ($key == "companyName")
        @php $currentCompany = $value; @endphp
        @elseif ($key == "image")
        @php $currentImage = $value; @endphp
        @else
        @php $currentContent = $value; @endphp
        @endif

        @endforeach

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="card-title h1 text-center mb-5">{{$currentTitle}}</h5>
                    <p class="card-title h2 text-center mb-5">{{$currentCompany}}</h5>
                    <p class="card-text h3 text-center mb-5">{{$currentContent}}</p>
                    <p class="card-text h4 text-center mb-5">{{$currentCity}}</p>
                </div>
                <div class="col-sm-4">
                    <img src="{{$currentImage}}" class="card-img-top" alt="..." />
                </div>
            </div>

            @endforeach
        </div>
    </div>
    @endsection