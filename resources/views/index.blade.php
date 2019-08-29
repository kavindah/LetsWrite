@extends('theme.theme')

@section('pageTitle')
    Home Page
@endsection

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div id="app">
    @include('includes.hero')
    @include('layouts.app')
    <div class="row">
        <div class="col-md-2" id="left-panel-style">
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
            <a href="#" class="btn btn-block">Heading 1</a>
        </div>

        <div class="col-md-8" id="middle-panel-style">
            @include('includes/contentCarousel')
            <post-block></post-block>
        </div>

        <div class="col-md-2" id="right-panel-style">
            @include('includes.winners')
        </div>
        @yield('content')
    </div>

</div>
<script src="{{asset('js/app.js')}}"></script>