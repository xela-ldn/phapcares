@extends('layout.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/news.css')}}">
@stop

@section('content')
<div class="container pb-3">

    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>
    
    <div class="card mt-1 mb-1">
        <div class="card-body p-3">
            <div class="row h-100">
                <div class="col-md-3 my-auto">
                    <img src="https://dummyimage.com/16:9x1080" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 my-auto">
                    <a href="news/news1"><h4 class="pc-text-medium mt-2">Lorem Ipsum</h4></a>
                    <p class="m-0 pc-text-medium">07/08/2020</p>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam- corper suscipit lobortis nisl ut aliquip</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-1 mb-1">
        <div class="card-body p-3">
            <div class="row h-100">
                <div class="col-md-3 my-auto">
                    <img src="https://dummyimage.com/16:9x1080" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 my-auto">
                    <a href="news/news1"><h4 class="pc-text-medium mt-2">Lorem Ipsum</h4></a>
                    <p class="m-0 pc-text-medium">07/08/2020</p>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam- corper suscipit lobortis nisl ut aliquip</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-1 mb-1">
        <div class="card-body p-3">
            <div class="row h-100">
                <div class="col-md-3 my-auto">
                    <img src="https://dummyimage.com/16:9x1080" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 my-auto">
                    <a href="news/news1"><h4 class="pc-text-medium mt-2">Lorem Ipsum</h4></a>
                    <p class="m-0 pc-text-medium">07/08/2020</p>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam- corper suscipit lobortis nisl ut aliquip</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-1 mb-1">
        <div class="card-body p-3">
            <div class="row h-100">
                <div class="col-md-3 my-auto">
                    <img src="https://dummyimage.com/16:9x1080" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 my-auto">
                    <a href="news/news1"><h4 class="pc-text-medium mt-2">Lorem Ipsum</h4></a>
                    <p class="m-0 pc-text-medium">07/08/2020</p>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam- corper suscipit lobortis nisl ut aliquip</p>
                </div>
            </div>
        </div>
    </div>
</div>


@stop