@extends('theme.theme')

@section('pageTitle')
    Home Page
@endsection


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