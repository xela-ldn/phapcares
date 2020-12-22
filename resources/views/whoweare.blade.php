@extends('layout.app')
@section('custom-title')
                    @if ($selected_page == 'history')
                        History - PHAPCares
                    @elseif ($selected_page == 'officers')
                        Officers - PHAPCares
                    @endif
@stop

@section('breadcrumb')
    <div class="container">
        <nav class="mt-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Who we are</li>
            </ol>
        </nav>
    </div>
@endsection

@section('sidebar')
    @parent
    
    @section('sidebar-content')
      
    @endsection

@stop

@section('content')

    <div class="container pb-3">
        <div class="row">
            <div class="col-md-3">
                <div class="nav-wrapper">
                    <ul class="list-unstyled">
                        <li class="pc-text-bold">Who we are</li>
                        <li><a id="history_item" class="" href="/whoweare/history">History / Profile</a></li>
                        <li><a id="officers_item" class="" href="/whoweare/officers">Officers</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                    @if ($selected_page == 'history')
                        @include('whoweare-pages.history')
                    @elseif ($selected_page == 'officers')
                        @include('whoweare-pages.officers')
                    @endif
            </div>
        </div>
    </div>

@endsection

<!-- Development -->

<!-- Production -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->


@section('custom-js')

<script type="text/javascript">

    var page = '{{$selected_page}}';

    let history_item = document.getElementById("history_item");
    let officers_item = document.getElementById("officers_item");


    if(page == 'history') {

        history_item.classList.add("pc-text-bold");

    } else {

        officers_item.classList.add("pc-text-bold");

    }
   
</script>

@stop


