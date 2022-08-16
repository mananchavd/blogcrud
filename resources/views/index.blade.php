<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

<style>

        .container{

            padding:0.5%;

        }

    </style>

<div class="container">

<h2 class="alert alert-success text-center color:red">welcome to preskool blog </h2>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">



<form method="POST" action="{{ route('generalreg.store') }}" enctype="multipart/form-data">



 @csrf



<!-- Extended default form grid -->

<form>

  <!-- Grid row -->

  <div class="form-row">

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="firstname" id="first_name" placeholder="First Name">

    </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="lastname" id="last_name" placeholder="Last Name">

    </div>

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="fathername" id="fathername" placeholder="father name">

    </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="mothername" id="mothername" placeholder="mother name">

    </div>    


  <!-- Default input -->

  <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="gender" id="gender" placeholder="Gender">

  </div>

  <!-- Default input -->

  <div class="form-group col-md-6">

    <input mdbInput type="email" class="form-control" name="emailfm" id="email" placeholder="Email of father/mother">

  </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="number" class="form-control" name="phone" id="phone" placeholder="(+) Phone of father/mother">

    </div>

    <div class="form-group col-md-6">

      <input mdbInput type="number" class="form-control" name="homephone" id="hphone" placeholder="(+) homephone number">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="address" id="address" placeholder="address">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="state" id="state" placeholder="state">

    </div>

    <div class="form-group col-md-6">

    <input mdbInput type="text" class="form-control" name="religion" id="religion" placeholder="religion">

    </div>
   

  </div>

  <!-- Grid row -->

 <a href="{{ route('generalreg.index') }}" class="btn btn-warning">Cancel</a>

 <button type="submit"  name="submit" class="btn btn-info input-lg">Create Employee</button>
 <a href="{{ route('generalreg.create') }}" class="btn btn-info input-lg">Registered students</a>
</form>

<!-- Extended default form grid -->

</div>

 </div>

</form>

</div>

</div>

</div>



@endsection

</body>
</html>