@extends('theme.theme')

@section('pageTitle')
    Content Page
@endsection

@include('includes.stylesheet')
@include('includes.hero')
@include('layouts.app')

<div class="row">
    <div class="col-md-2" id="left-panel-style">
        @include('includes.leftHeadingBox')
    </div>

    <div class="col-md-8" id="middle-panel-style">
        {{--@include('includes/contentCarousel')--}}
        {{--<post-block></post-block>--}}
    </div>

    <div class="col-md-2" id="right-panel-style">
        {{--@include('includes.winners')--}}
    </div>
</div>


