@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <div class="row">

     {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

         <div class="form-group">
             {!! Form::label('title','Title Name') !!}
             {!! Form::text('title',null, ['class'=>'form-control']) !!}
         </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',array('1'=>'PHP','0'=>'Javascript'),null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','photo') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
    </div>

      <div class="form-group">
      {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
      </div>

     {{--    //exclamation means filter anything..its like html entities--}}


             {{csrf_field()}} <!-- This is for the token mismatch -->


         {!! Form::close() !!}

    </div>

    <div class="row">

@include('includes.form_error')
    </div>
    @stop