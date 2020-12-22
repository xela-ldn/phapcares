@extends('layout.app')
@section('custom-title')
PHAPCares
@stop
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@stop

@section('sidebar')
    
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
<div class="container pt-4">
    <div class="d-flex bd-highlight pb-4">
        <h3 class="pc-text-medium pc-text-blue">News</h3>
    </div>
    <!-- start of news -->
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="img-date">
                    <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                    <div class="news-date">
                        <p>07/06/2020</p>
                    </div>
                </div>
                
                <div class="card-body">
                    <a href="/news/news1"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow" >
                <div class="img-date">
                    <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                    <div class="news-date">
                        <p>07/06/2020</p>
                    </div>
                </div>
                
                <div class="card-body">
                    <a href="/news/news1"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow" >
                <div class="img-date">
                    <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                    <div class="news-date">
                        <p>07/06/2020</p>
                    </div>
                </div>
                
                <div class="card-body">
                    <a href="/news/news1"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow" >
                <div class="img-date">
                    <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="...">
                    <div class="news-date">
                        <p>07/06/2020</p>
                    </div>
                </div>
                
                <div class="card-body">
                    <a href="/news/news1"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex bd-highlight mt-5">
        <a class="pc-text-blue pc-text-bold" href="/news">See More Resources</a>
    </div>
    <!-- end of news -->
    <!-- start of who we are -->
    <div class="row h-100 pt-5 pb-5">
        <div class="col-lg-6 my-auto">
            <div class="whoweare-spacer">
                <div class="text-center">
                    <img src="{{asset('images/whoweare.png')}}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>

        <div class="col-lg-6 my-auto whoweare-text-content">
                <h3 class="pc-text-regular pc-text-blue">Who we are</h3>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adip- iscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
                <a href="/whoweare/history" class="btn pc-btn-outline-blue learn-btn mt-2">Learn More</a>
        </div>
    </div>

    <!-- end of who we are -->

    <!-- start of csr -->
    <div class="row h-100 pt-4 pb-5">
        <div class="col-lg-6 order-lg-2 my-auto">
            <div class="csr-spacer">
                <div class="text-center">
                    <img src="{{asset('images/csr.png')}}" class="img-fluid" width="375" alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-1 my-auto csr-text-content">
                <h3 class="pc-text-regular pc-text-blue">PHAPCares Kalinga Program</h3>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
                <button class="btn pc-btn-outline-blue learn-btn mt-2">Learn More</button>
        </div>


    </div>
    <!-- end of csr -->

</div>

<!-- End of home container -->

    <!-- start of circular   -->
    <div class="pc-bg-blue pt-5 pb-5">
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{asset('images/circulars.png')}}" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="circular-spacer">
                        <h3 class="pc-text-regular text-white">Circulars</h3>
                        <p class="text-white mt-3">Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi envm dolor sit amet, cons ec- tetuer adipiscing elit, sed diam nonum</p>
                        <button class="btn learn-btn pc-btn-white mt-3">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of circular  -->

    <!-- start of our members -->
    <div class="container pt-5 pb-5">
        <div class="text-center">
            <h3 class="pc-text-regular pc-text-blue">Our Members</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adip- iscing elit, sed diam</p>
        </div>

        <div class="row h-100 row-cols-4 mt-5">
            <div class="col border-right border-bottom">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/1.jpg')}}" class="img-fluid img-members" alt="">
                </div>
            </div>
            <div class="col border-right border-bottom">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/2.jpg')}}" class="img-fluid img-members" alt=""></div>
                </div>
            <div class="col border-right border-bottom">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/3.jpg')}}" class="img-fluid img-members" alt=""></div>
                </div>    
            <div class="col border-bottom">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/4.jpg')}}" class="img-fluid img-members" alt=""></div>    
                </div>    
            <div class="col border-right">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/5.jpg')}}" class="img-fluid img-members" alt=""></div>
                </div>    
            <div class="col border-right">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/6.jpg')}}" class="img-fluid img-members" alt=""></div> 
                </div>    
            <div class="col border-right">
                <div class="text-center">
                    <img src="{{asset('images/member-logos/7.jpg')}}" class="img-fluid img-members" alt=""></div> 
                </div>    
            <div class="col">
                    <div class="text-center">
                        <img src="{{asset('images/member-logos/8.jpg')}}" class="img-fluid img-members" alt="">
                    </div>
            </div>
        </div>

        <div class="text-center">
            <a href="/members" class="btn learn-btn pc-btn-blue mt-5">Learn More</a>
        </div>
    </div>

    <!-- start of join us-->
    <div class="pc-bg-blue pt-5">
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-6 my-auto">
                        <div class="text-center">
                            <h2 class="pc-text-regular text-white">Talk to Us</h2>
                            <p class="text-white mt-3 ju-number-font">+632.8.865.5600</p>
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div class="joinus-spacer">
                        <div class="text-center">
                            <h2 class="pc-text-regular text-white">Join Us</h2>
                            <ul class="list-unstyled">
                                <li class="mt-3">
                                    <button class="btn learn-btn btn-light pc-text-bold">Be a Member</button>
                                </li>
                                <li class="mt-3">
                                    <button class="btn learn-btn btn-light pc-text-bold">Be a Volunteer</button>
                                </li>
                                <li class="mt-3"> 
                                    <button class="btn learn-btn btn-light pc-text-bold">Donate a Medicine/ Cash</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shade-1"></div>
    <div class="shade-2"></div>
 <!-- end of join us -->


    

    <!-- end of footer -->
   
   

  
    

    
@stop