<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Application</title>
  </head>
  <body>

    <div class="container">
        <a href="{{url('/add-data')}}" class=" mt-5 mb-5 btn btn-primary" >Add data</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th> 
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($showData as $key=>$data) 
              <tr>
                <td>{{$data->key+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>