<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

   <div class="container">
    <a href="{{url("/")}}" class=" mt-5 mb-5 btn btn-primary" >show data</a>
    @if(Session :: has('msg'))
    <p class="alert alert-success">{{ Session::get('msg')}}<p>
        @endif
    <form method="POST" action="{{url("/store-data")}}" >
        @csrf
      
        <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}<span>
            @enderror
        </div>
            <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email"  class="form-control" 
            id="exampleFormControlInput1" placeholder="name@example.com">
            @error('email')
            <span class="text-danger">{{$message}}<span>
             @enderror
            </div>
            <input type="submit" class="mt-2 mb-3 btn btn-primary" value="submit"/>
    </form>
     

   </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>