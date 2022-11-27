
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">





    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Booking.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        @auth
                            <b> {{Auth::user()->name}}</b>
                            @guest
                        <a class="nav-link" href="{{route('login')}}">log in
                            @endguest

                        </a>
                            @endauth
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a class="nav-link active" aria-current="page" href="">log out</a>
                        </form>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="https://static.arocdn.com/Sites/50/imperialhotels2022/uploads/images/FullLengthImages/Large/R.N_Twin_2_3.jpg"
                     width="2000px" height="500px" >
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Find accommodation for a new trip</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src=" https://q-xx.bstatic.com/xdata/images/hotel/840x460/395349908.jpg?k=b07146dbfdfca4816c88851ff8c8bd620596b2d1dd544da48019901355b0da4f&o="
                     width="2000px" height="500px" >

                <div class="container">
                    <div class="carousel-caption">
                        <p>Look for deals on hotels, houses and more.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cache.marriott.com/content/dam/marriott-renditions/SANCM/sancm-one-living-1705-hor-wide.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=1336px:*"
                     width="2000px" height="500px" >

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 style="color: white">ASDFGHJKL</h1>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach($cats as $cat)
            <div class="col-lg-4">
                <img src="https://www.contemporist.com/wp-content/uploads/2016/12/wrap-around-headboard-131216-1027-01-800x527.jpg"
                     width="170px" height="140px" >

                <h2 class="fw-normal">
                        <a href="{{route('postsByCat', $cat->id )}}">{{$cat->name}}</a>
                    </h2>
                <p>903 accommodation options</p>

                <p> <a href="{{ route('posts.create') }}" class="btn btn-primary">add new place</a></p>
            </div>
            @endforeach<!-- /.col-lg-4 -->



        <!-- START THE FEATURETTES -->
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Apartments<span class="text-muted"></span></h2>
                        <p class="lead">888332 apartments</p>
                        @foreach($myapartments as $apartment)
                            <a href="{{route('apartments.show', $apartment->id)}}" ><h3>{{$apartment->title}}</h3></a>
                            <p> {{$apartment->content}}</p>


                        @endforeach
                    </div>
                    <h6 style="color: white">ASDFGHJKL</h6>

                    <div class="col-md-5 order-md-1">
                        <img src="https://i.pinimg.com/564x/27/bf/8a/27bf8afc4cdea33528e66f1af3f3a4f1.jpg"
                             width="500px" height="500px" >

                    </div>
                </div>

                        <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">
                            Hotels<span class="text-muted"></span></h2>
                        <p class="lead">456 987 hotels</p>
                        @foreach($myposts as $post)
                            <a href="{{route('posts.show', $post->id)}}" ><h3>{{$post->title}}</h3></a>
                            <p> {{$post->content}}</p>
                        @endforeach
                    </div>
                    <div class="col-md-5">
                        <img src="https://cdn.marriottnetwork.com/uploads/sites/22/2019/10/the-mayflower-hotel-one-bedroom-suite-788x664.jpg"
                             width="500px" height="500px" >

                    </div>
                </div>

                       @auth
                        <div> {{Auth::user()->name}}</div>
                        <form action="{{route('logout')}}" method="post">
                            <button type="submit">log out</button>
                        </form>
                        @endauth
                        @guest
                            <a href="{{route('login')}}">Log in</a>
                        @endguest



                </div>
            </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
                Villas<span class="text-muted"></span></h2>
            <p class="lead">487 962 villas</p>
        </div>
        <div class="col-md-5">
            <img src="https://blog.tiket.com/wp-content/uploads/2021/12/3.-Yucca-Villas.jpg"
                 width="500px" height="500px" >

        </div>
    </div>


        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <title>All post</title>--}}
{{--</head>--}}
{{--<body class="antialiased">--}}
{{--<a href="{{ route('posts.create') }}">Go to Create Page</a>--}}


{{--@foreach($myposts as $post)--}}
{{--    <a href="{{route('posts.show', $post->id)}}" ><h3>{{$post->title}}</h3></a>--}}
{{--    <p> {{$post->content}}</p>--}}


{{--@endforeach--}}

</body>
</html>



