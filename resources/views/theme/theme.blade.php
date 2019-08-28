<html>
<head>
    <title>Let's Write || @yield ('pageTitle')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken:'{{csrf_token()}}}'}</script>
</head>
<body>
    <div id="app">
        <hero></hero>
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

                </div>
            @yield('content')
        </div>

    </div>
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
