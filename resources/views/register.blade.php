@extends('master')

@section('title', 'Register')

@section('grandtitle', 'Register')
@section('subtitle', 'Register')

@section('breadkiri', '-')
@section('breadkanan', '-')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{url('register')}}" enctype="multipart/form-data" method="post">
  {{ csrf_field() }}
  <div class="form-group">
   <label for="usrnm">Username:</label>
   <input type="text" name="username" class="form-control" id="usrnm">
  </div>
  <div class="form-group">
   <label for="password">Password:</label>
   <input type="password" name="password" class="form-control" id="password">
 </div>
 <div class="form-group">
  <label for="fllnm">Full Name:</label>
  <input type="text" name="fullname" class="form-control" id="tglsrt">
 </div>
 <div class="form-group">
  <label for="sel1">Level:</label>
  <select name="level" class="form-control" id="sel1">
     <option>1</option>
     <option>2</option>
     <option>3</option>
  </select>
  <br>
 <!-- </div>
 <div class="form-group">
  <label for="imgInp">Foto:</label>
  <input type="file" name="file" id="imgInp">
  <img id="blah" src="#" alt="Your Image">
 </div> -->
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
