@extends('layouts.app')
@section('content')
    <div class="col-sm-8 col-sm-offset-2 well well-sm" style="background-color:#FFF;">
        <h1 class="text-center">{{$post->title}}</h1>
        <hr>
        <img src="{{asset('img/'.$post->img)}}" class="img-fluid img-responsive img-thumbnail" style="width:100%"/>
    </div>
@endsection