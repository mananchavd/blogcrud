<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
        .container{
         margin-top:0.5%;
        }

        .col{
          margin-top:1%;
        }



</style>

<body>

<div class="container">
  
  <h2 class="alert alert-success text-center color:red" ><span class="fab fa-laravel"> edit your profile</span></h2>
  <form method="POST" action="{{ route('generalreg.update',$data) }}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="firstname" value="{{ $data->firstname }}" placeholder="Enter firstname" name="firstname">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->lastname }}" placeholder="Enter lastname" name="lastname">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->fathername }}" id="email" placeholder="Enter fathername" name="fathername">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->mothername }}" placeholder="Enter mothername" name="mothername">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="email" value="{{ $data->emailfm }}" placeholder="Enter email" name="emailfm">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->gender }}" placeholder="Enter gender" name="gender">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->homephone }}" id="email" placeholder="Enter homephone" name="homephone">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->phone }}" placeholder="Enter phone" name="phone">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->address }}" id="email" placeholder="Enter address" name="address">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->state }}" placeholder="Enter state" name="state">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" value="{{ $data->religion }}" id="email" placeholder="Enter religion" name="religion">
      </div>
    </div>
    <input type="submit" name="submit" value="update" class="btn btn-outline-primary mt-3"></a>
  </form>
</div>

</body>
</html>
