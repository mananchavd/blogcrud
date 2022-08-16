<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .container{

            padding:0.5%;

        }

    </style>
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



<div class="container">

<h2 class="alert alert-success text-center color:red">WELCOME!! CREATE YOUR NEW EMPLOYEE HERE</h2>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">



<form method="post" action="{{ route('generalreg.store') }}" enctype="multipart/form-data">



 @csrf

  <!-- Grid row -->

  <div class="form-row">

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">

    </div>

    <!-- Default input -->

    <div class="form-group col-md-6">

      <input mdbInput type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">

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
    <div class="form-group col-md-3">

        <input type="file" name="image" id="image" class="form-control">

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

