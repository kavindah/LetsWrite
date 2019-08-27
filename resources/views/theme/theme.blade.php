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

                <div class="col-md-6" id="middle-panel-style">
                    <!-- News jumbotron -->
                    <div class="jumbotron text-center hoverable p-4">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-4 offset-md-1 mx-3 my-3">

                                <!-- Featured image -->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-7 text-md-left ml-3 mt-3">

                                <!-- Excerpt -->
                                <a href="#!" class="green-text">
                                    <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                                </a>

                                <h4 class="h4 mb-4">This is title of the news</h4>

                                <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

                                <a class="btn btn-success">Read more</a>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- News jumbotron -->
                </div>

                <div class="col-md-3" id="right-panel-style">aaaaaa</div>
            @yield('content')
        </div>

    </div>
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
