@extends('layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
 <h1>Create a Post</h1>
 <hr>
 {!! Form::open(['route' => 'post.store','data-parsley-validate'=>'','files'=> 'true']) !!}
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['style'=>'width:100%;']) !!}<br><br>
    {!! Form::file('img',['class'=>'form-control']); !!}<br>
    {!! Form::submit('Create the post',['class'=>'btn btn-lg btn-block btn-success form-control']);!!}
 {!! Form::close() !!}
</div>
@endsection