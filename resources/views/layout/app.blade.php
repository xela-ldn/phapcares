
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('custom-title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/global.css')}}">

        @yield('custom-css')

    </head>
    <body>
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <a class="navbar-brand" href="/"><img class="image-blend" src="{{asset('images/phapcares-logo.jpg')}}" alt="" height="45"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <button class="btn learn-btn pc-btn-green my-2 my-sm-0" type="submit">BE A MEMBER</button>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-md navbar-dark pc-bg-blue pc-secondary-navbar">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            WHO WE ARE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/whoweare/history">History</a>
                            <a class="dropdown-item" href="/whoweare/officers">Officers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PHAPCARES KALINGA PROGRAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/members">OUR MEMBERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CIRCULARS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            JOIN US
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Be a member</a>
                            <a class="dropdown-item" href="#">Be a volunteer</a>
                            <a class="dropdown-item" href="#">Donate medicine/cash</a>
                        </li>
                    </div>
                </div>
            </nav>

            @yield('breadcrumb')

            @section('sidebar')
                <div class="container">
                    @yield('sidebar-content')
                </div>
            @show

            @yield('content')
                        <!-- start of footer -->
            <div class="pc-bg-gray footer-font-size">
                <div class="container pt-5">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="bd-highlight">
                            <a href="#"><img class="image-blend" src="{{asset('images/phapcares-logo.jpg')}}" alt="" height="45"></a>
                        </div>
                        <div class="ml-auto p-2 bd-highlight">
                            <a href="#" class="ic-size"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="ic-size"><i class="fab fa-instagram-square ic-size"></i></a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/whoweare" class="pc-text-bold">Who we are</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li> 
                                    <a href="#">Officers</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a class="pc-text-bold" href="#">CSR</a>
                                </li>
                                <li >
                                    <a class="pc-text-bold" href="/news">News</a>
                                </li>
                                <li>
                                    <a class="pc-text-bold" href="#">Circulars</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a class="pc-text-bold" href="#">Join Us</a>
                                </li>
                                <li>
                                    <a href="#">Be a member</a>
                                </li>
                                <li> 
                                    <a href="#">Be a Volunteer</a>
                                </li>
                                <li> 
                                    <a href="#">Donate Medicine/ Cash</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <ul class="list-unstyled">
                                <li>
                                    <p class="pc-text-bold m-0">Contact</p>
                                    <p>+632.8.865.5600</p>
                                </li>
                                <li>
                                    <p class="pc-text-bold m-0">Email</p>
                                    <p>phap7346@phap.org.ph</p>
                                </li>
                                <li>
                                    <p class="pc-text-bold m-0">Address</p>
                                    <p class="pt-1">Unit 502 One Corporate Plaza,845 Arnaiz Avenue, Makati City, Philippines</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <footer class="pt-3 pb-5">
                        © Copyright 2021. PHAPCares Foundation. All Rights Reserved
                    </footer>
                </div>
            </div>
   
    </body>

        <script src="{{asset('js/app.js')}}"></script>

        @yield('custom-js')

</html>