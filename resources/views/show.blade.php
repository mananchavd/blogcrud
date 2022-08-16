<!DOCTYPE html>
<html lang="en">
<head>
  <title>show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>student details</h2>
  
  <table class="table table-hover">
  @if($data)
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>fathername</th>
        <th>mothername</th>
        <th>email</th>
        <th>gender</th>
        <th>homephone</th>
        <th>phone</th>
        <th>state</th>
        <th>religion</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $data->firstname }}</td>
        <td>{{ $data->lastname }}</td>
        <td>{{ $data->fathername }}</td>
        <td>{{ $data->mothername }}</td>
        <td>{{ $data->emailfm}}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->homephone }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->state }}</td>
        <td>{{ $data->religion }}</td>
        <td>{{ $data->address }}</td>
        <td><a href="{{ route('generalreg.edit',$data->id) }}" class="btn btn-outline-primary">edit</a></td>
        
      </tr>
    </tbody>
  @endif
</table>


</div>

</body>
</html>
