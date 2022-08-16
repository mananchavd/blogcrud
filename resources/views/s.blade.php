<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

        .container{

            padding:0.5%;

        }

    </style>

<body>
@extends('layouts.master')

@extends('layouts.style')



@section('content')

@if($errors->any())

<div class="alert alert-danger">

 <ul>

  @foreach($errors->all() as $error)

  <li>{{ $error }}</li>

  @endforeach

 </ul>

</div>

@endif

<div class="container">

<h2 class="alert alert-dark text-center " style="color:red; text:bold"><span class="fab fa-laravel"> edit your profile</span></h2>

<br>

<h2 class="alert alert-success " > edit profile #{{$data->id}} <span class="fa fa-user" style="float:right"> {{$data->firstname}}  {{$data->lastname}}</span> </h2>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">



<form method="POST" action="{{ route('precontroller.update', $data->id) }}" enctype="multipart/form-data">

@csrf

@method('PUT')

<!-- Extended default form grid -->

<form>

  <!-- Grid row -->

  <div class="form-row">

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="first_name" id="first_name" value="{{ $data->firstname }}" placeholder="first name">

    </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="last_name" id="last_name" value="{{ $data->lastname }}" placeholder="last name">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="fathername" id="first_name" value="{{ $data->fathername }}" placeholder="first name">

    </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="mothername" id="last_name" value="{{ $data->mothername }}" placeholder="last name">

    </div>

            
    <div class="form-group col-md-6">

    <input mdbInput type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" placeholder="Email">

    </div>                              
  <!-- Default input -->

  <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="gender" id="gender" value="{{ $data->gender}}" placeholder="Gender">

  </div>

  <!-- Default input -->
    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="homephone" id="hphone" value="{{ $data->homephone }}" placeholder="(+) home Phone">

    </div>


    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="phone" id="phone" value="{{ $data->phone }}" placeholder="(+) Phone">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="address" id="address" value="{{ $data->address }}" placeholder="address">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="state" id="state" value="{{ $data->state }}" placeholder="state">

    </div>

    <div class="row">

    <div class="form-group col-md-4">

        <input type="file" name="image" id="image" class="form-control">

        </div>

    <div class="form-group col-md-3">

        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="rounded-circle" width="60" />

        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />

    </div>

    </div>

  </div>

  <!-- Grid row -->

 <a href="{{ route('employee.index') }}" class="btn btn-warning">Cancel</a>

 <button type="submit"  name="add" class="btn btn-info input-lg">Create Employee</button>

</form>

<!-- Extended default form grid -->

</div>

 </div>

</form>

</div>

</div>

</div>



@endsection



@section('scripts')



<script>

 //---------------------Browse image----------------

 $('#browse_file').on('click',function(){

                            $('#image').click();                 

                        })

                        $('#image').on('change', function(e){

                            showFile(this, '#showImage');

                        })



</script>



@endsection
</body>
</html>

