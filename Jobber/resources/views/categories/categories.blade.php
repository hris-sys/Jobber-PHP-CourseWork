@extends('layouts.app')

@section('title', 'Categories')

@section('content')

<div class="inner">
    <div class="container">
        <header class="mx-auto text-center">
            <h2 class="badge badge-secondary">{{$title}}</h2>
        </header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-center col-md h2">Cities</h5>
                        <p class="card-text">
                            @foreach ($resultsCities as $classRes)

                            @foreach ($classRes as $key => $value)

                            @if ($key == "name")
                            @php $currentCityName = $value; @endphp
                            @endif

                            @endforeach

                        <div class="">
                            <a href="/search?search={{$currentCityName}}" class="h5">{{$currentCityName}}</a>
                        </div>
                        @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title text-center col-md h2">Companies</h5>
                            <p class="card-text">
                                @foreach ($resultsCompanies as $classRes)

                                @foreach ($classRes as $key => $value)

                                @if ($key == "name")
                                @php $currentCompanyName = $value; @endphp
                                @endif

                                @endforeach

                            <div class="">
                                <a href="/search?search={{$currentCompanyName}}" class="h5">{{$currentCompanyName}}</a>
                            </div>
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection