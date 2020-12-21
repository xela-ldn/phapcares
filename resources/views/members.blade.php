@extends('layout.app')

@section('custom-title') 

    <title>PHAPCares - Members</title>

@stop

@section('custom-css')

<link rel="stylesheet" href="{{asset('css/members.css')}}"/>

@stop



@section('content')
<div class="container pb-3">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Members</li>
        </ol>
    </nav>
   
    <div class="row">
        <div class="col-md-6 py-1">
            <div class="card border-left-blue py-2">
                <div class="card-body">
                <div class="row h-100">
                    <div class="col-md-3 my-auto">
                            <div class="text-center">
                                <img src="{{asset('images/member-logos/1-test.jpg')}}" class="img-fluid members-logo" alt="...">
                            </div>
                    </div>
                    <div class="col-md-9 my-auto pt-2 members-text-content">
                            <h5 class="pc-text-medium">Abbott</h5>
                            <p class="m-0 mb-1">Unit 502, One Corporate Plaza, 845 Antonio Arnaiz Ave, Legazpi Village, Makati, 1229 Metro Manila</p>
                            <a href="#"><u>www.astrazeneca.com</u></a>
                    </div>
                </div>
                </div>
            </div>  
        </div>
        <div class="col-md-6 py-1">
            <div class="card border-left-blue py-2">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-md-3 my-auto">
                            <div class="text-center">
                                <img src="{{asset('images/member-logos/1-test.jpg')}}" class="img-fluid members-logo" alt="...">
                            </div>
                        </div>
                        <div class="col-md-9 my-auto pt-2">
                                <h5 class="pc-text-medium">Astrazenica</h5>
                                <p class="m-0 mb-1">Unit 502, One Corporate Plaza, 845 Antonio Arnaiz Ave, Legazpi Village, Makati, 1229 Metro Manila</p>
                                <a href="#"><u>www.astrazeneca.com</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 py-1">
            <div class="card border-left-blue py-2">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-md-3 my-auto">
                            <div class="text-center">
                                <img src="{{asset('images/member-logos/1-test.jpg')}}" class="img-fluid members-logo" alt="...">
                            </div>
                        </div>
                        <div class="col-md-9 my-auto pt-2">
                                <h5 class="pc-text-medium">Astrazenica</h5>
                                <p class="m-0 mb-1">Unit 502, One Corporate Plaza, 845 Antonio Arnaiz Ave, Legazpi Village, Makati, 1229 Metro Manila</p>
                                <a href="#"><u>www.astrazeneca.com</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 py-1">
            <div class="card border-left-blue py-2">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-md-3 my-auto">
                            <div class="text-center">
                                <img src="{{asset('images/member-logos/1-test.jpg')}}" class="img-fluid members-logo" alt="...">
                            </div>
                        </div>
                        <div class="col-md-9 my-auto pt-2">
                                <h5 class="pc-text-medium">Astrazenica</h5>
                                <p class="m-0 mb-1">Unit 502, One Corporate Plaza, 845 Antonio Arnaiz Ave, Legazpi Village, Makati, 1229 Metro Manila</p>
                                <a href="#"><u>www.astrazeneca.com</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 py-1">
            <div class="card border-left-blue py-2">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-md-3 my-auto">
                            <div class="text-center">
                                <img src="{{asset('images/member-logos/1-test.jpg')}}" class="img-fluid members-logo" alt="...">
                            </div>
                        </div>
                        <div class="col-md-9 my-auto pt-2">
                                <h5 class="pc-text-medium">Astrazenica</h5>
                                <p class="m-0 mb-1">Unit 502, One Corporate Plaza, 845 Antonio Arnaiz Ave, Legazpi Village, Makati, 1229 Metro Manila</p>
                                <a href="#"><u>www.astrazeneca.com</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop