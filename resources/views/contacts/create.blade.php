@extends('layouts.app')


@section('content')
hello worled


{!! Form::open(['route' => 'contacts.store']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">user</label>
   
    
    {!!   Form::text('username',null ,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contact</label>
    {!!   Form::text('contact',null ,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  {!! Form::submit('Click 0Me!',['class'=>'btn btn-primary']) !!}
  {!! Form::close() !!}
@endsection