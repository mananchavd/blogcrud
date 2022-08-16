<!DOCTYPE html>
<html lang="en">
<head>
  <title>data</title>
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
  
  @csrf
  @method('PATCH')
  <table class="table table-hover">
  <thead>
      <tr>
        <th>no.</th>
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

     @foreach($alldata as $alldata)
    <tbody>
      <tr>
        <td>{{ $alldata->id }}</td>
        <td>{{ $alldata->firstname }}</td>
        <td>{{ $alldata->lastname }}</td>
        <td>{{ $alldata->fathername }}</td>
        <td>{{ $alldata->mothername }}</td>
        <td>{{ $alldata->emailfm}}</td>
        <td>{{ $alldata->gender }}</td>
        <td>{{ $alldata->homephone }}</td>
        <td>{{ $alldata->phone }}</td>
        <td>{{ $alldata->state }}</td>
        <td>{{ $alldata->religion }}</td>
        <td>{{ $alldata->address }}</td>
        <td><a href="{{ route('generalreg.edit',$alldata->id) }}" class="btn btn-outline-primary">edit</a></td>

        <td>
        <form action="{{ route('generalreg.destroy', $alldata->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <p class="btn btn-outline-primary">
                <button type="submit" value="delete" class="btn btn-sm text-danger">delete</button>
            </p>
        </form>     
        </td>
      </tr>
    </tbody>
    @endforeach
 
</table>


</div>

</body>
</html>
