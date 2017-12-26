@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-6 panel panel-default">
        <h5 class="panel-heading">Stories</h5>  
        <div class="panel-body">
<div id="c-stories" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
    <li data-target="#c-stories" data-slide-to="0" class="active">a</li>
    @foreach($posts as $post)        
        <li data-target="#c-stories" data-slide-to="1">a</li>  
    @endforeach     
    </ol>
    
    <div class="carousel-inner bg-primary" style="border-radius:100px;min-height:175px;" role="listbox">
        <div class="item active">
            <img src="/images/1.jpg" height="100px"class="center-block img-responsive img-circle" width="150px" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">Elisa Thudeson</p>
            </div>
        </div>
        @foreach($posts as $post)
        <div class="item">
            <img src="{{asset('img/'.$post->img)}}" height="100px"class="center-block img-responsive  img-thumbnail img-rounded" width="150px" style="margin-top:10px; margin-bootom:10px;" alt="...">
            <div class="col-sm-12">
                <p style="text-align:center;">{{$post->title}}</p>
            </div>
        </div>
        @endforeach

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
            @foreach($posts as $post)
            <div class="animated zoomInUp" style="overflow:hidden;">
                <div class="col-sm-12">   
                <h3 class="text-center">{{$post->title}}</h3>             
                <p class="text-right"><strong>{{$post->user_name}}</strong> Posted at <strong>{{$post->created_at}}</strong></p>
                <img src="{{asset('img/'.$post->img)}}" class="img-thumbnail img-responsive" width="100%">                            
                </div>                  
                <div class="col-sm-12 row">                
                    <div class="col-sm-10">
                        <div class="btn-group">
                            <a href="">
                                <div class="btn btn-link" style="font-size: 25px;">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </div>
                            </a>
                            <a href="">
                                <div class="btn btn-link" style="font-size: 25px;">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a href="">
                            <div class="btn btn-link" style="font-size: 25px;">
                                <span class="glyphicon glyphicon-bookmark"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 row">
                    <h4>Comments:</h4>
                    <div class="well well-sm" style="min-height:20px;">
                        <p>No Comments. If available comments shows here...</p>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            
        </div>
        
        <div class="col-sm-1">
        </div>

        <div class="col-sm-4 panel panel-default">
            <h4 class="panel-heading">Ads</h4>
        </div>
        
    </div>
    

@endsection
