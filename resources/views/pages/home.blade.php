@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-6 panel panel-default">
        <h5 class="panel-heading">Stories</h5>  
        <div class="panel-body">
<div id="c-stories" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#c-stories" data-slide-to="0" class="active">a</li>
        <li data-target="#c-stories" data-slide-to="1">a</li>
        <li data-target="#c-stories" data-slide-to="2">a</li>
        <li data-target="#c-stories" data-slide-to="3">a</li>
        <li data-target="#c-stories" data-slide-to="4">a</li>
        <li data-target="#c-stories" data-slide-to="5">a</li>
        <li data-target="#c-stories" data-slide-to="6">a</li>
        <li data-target="#c-stories" data-slide-to="7">a</li>
        <li data-target="#c-stories" data-slide-to="8">a</li>
        <li data-target="#c-stories" data-slide-to="9">a</li>
    </ol>
    
    <div class="carousel-inner bg-primary" style="border-radius:100px;min-height:175px;" role="listbox">
        <div class="item active">
            <img src="images/1.jpg" height="100px"class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/2.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/3.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/4.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/5.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/6.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/7.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/8.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/9.jpg" height="100px" class="center-block img-responsive img-circle" width="100px"alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        <div class="item">
            <img src="images/10.jpg" height="100px" class="center-block img-responsive img-circle" width="100px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
         <a class="left carousel-control" style="border-radius:100px;" href="#c-stories" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" style="border-radius:100px;" href="#c-stories" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    
</div>
        </div>      
        </div>
    </div>  

    <div class="row">
        <div class="col-sm-6 panel panel-default">
            <h4 class="panel-heading">Posts</h4>
            <div class="animated zoomInUp thumbnail" style="overflow:hidden;">
                <div class="col-sm-12">
                <img src="images/7.jpg" width="100%">
                </div>                
                <div class="col-sm-12">
                           
                </div>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-4 panel panel-default">
            <h4 class="panel-heading">Ads</h4>
        </div>
    </div>

@endsection
