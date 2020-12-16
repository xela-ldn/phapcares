@extends('layout.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop

@section('content')
<!-- start of carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/slide1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slide1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slide1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end of carousel -->


<!-- start of home container -->
<div class="container mt-4">
    <div class="d-flex bd-highlight">
        <h3>News</h3>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card" >
                <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" >
                <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" >
                <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" >
                <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex bd-highlight mt-3">
        <a href="#">See More Resources</a>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <img src="{{asset('images/whoweare.png')}}" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-lg-6">
        <h4>Who we are</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, 
         sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
        <h4>Who we are</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, 
         sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
            <button class="btn btn-primary">Learn More</button>
        </div>

        <div class="col-lg-6">
            <img src="{{asset('images/csr.png')}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>

<!-- End of home container -->

    <!-- start of who we are  -->
    <div class="bg-primary pt-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('images/circulars.png')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-lg-6">
                    <h4>CSR</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, 
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
                    <button class="btn btn-light">Learn More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of who we are -->

    <div class="container mt-4">
        <div class="text-center">
            <h4>Our Members</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, sed diam</p>
        </div>

        <div class="row row-cols-4">
            <div class="col"><img src="{{asset('images/member-logos/1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/4.jpg')}}" class="img-fluid"alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="col"><img src="{{asset('images/member-logos/8.jpg')}}" class="img-fluid" alt=""></div>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary">Learn More</button>
        </div>
    </div>

    <!-- start of join us-->
    <div class="bg-primary pt-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h4>Talk to Us</h4>
                        <p>+632.8.865.5600</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <h4>Join Us</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <button class="btn btn-light">Be a Member</button>
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-light">Be a Volunteer</button>
                            </li>
                            <li class="list-group-item"> 
                                <button class="btn btn-light">Donate a Medicine/ Cash</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shade-1"></div>
    <div class="shade-2"></div>
 <!-- end of join us -->

 <!-- start of footer -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#"><img src="{{asset('images/phapcares-logo.jpg')}}" alt="" height="45"></a>
            </div>
            <div class="col-lg-6">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Who we are</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">History</a>
                    </li>
                    <li class="list-group-item"> 
                        <a href="#">Officers</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">CSR</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">News</a>
                    </li>
                    <li class="list-group-item"> 
                        <a href="#">Circulars</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Join Us</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Be a member</a>
                    </li>
                    <li class="list-group-item"> 
                        <a href="#">Be a Volunteer</a>
                    </li>
                    <li class="list-group-item"> 
                        <a href="#">Donate Medicine/ Cash</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>Contact</p>
                        <p>+632.8.865.5600sdfg</p>
                    </li>
                    <li class="list-group-item">
                        <p>Email</p>
                        <p>phap7346@phap.org.ph</p>
                    </li>
                    <li class="list-group-item">
                        <p>Address</p>
                        <p>Unit 502 One Corporate Plaza,845 Arnaiz Avenue, Makati City, Philippines</p>
                    </li>
                </ul>
            </div>
        </div>

        <footer>
            © Copyright 2021. PHAPCares Foundation. All Rights Reserved
        </footer>
    </div>

    <!-- end of footer -->
   
   

  
    

    
@stop