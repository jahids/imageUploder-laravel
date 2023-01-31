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
 <h1 class="text-center">Add Student</h1>
   <div class="container">
    {{-- <a href="{{url("/")}}" class=" mt-5 mb-5 btn btn-primary" >show data</a> --}}
  
    <form method="POST" action="{{url("/store-student")}}" >
        @csrf
      
        <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}<span>
            @enderror
        </div>
            <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Roll</label>
            <input type="number" name="roll"  class="form-control" 
            id="exampleFormControlInput1" placeholder="roll">
            @error('roll')
            <span class="text-danger">{{$message}}<span>
             @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Class</label>
                <input type="number" name="class"  class="form-control" 
                id="exampleFormControlInput1" placeholder="class">
                @error('class')
                <span class="text-danger">{{$message}}<span>
                 @enderror
                </div>

                <div class="form-group mb-2 mt-2">
                <select name="teacher_id" class="form-select" aria-label="Default select example">
                 <option value="0" >select Teacher</option>
                    @foreach ($showData as $item)
                    <option value={{$item->id}}>{{$item->name}}</option>
                    @endforeach
                  </select>

                  @error('teacher_id')
                <span class="text-danger">{{$message}}<span>
                 @enderror
                </div>

                <input type="submit" class="mt-2 mb-3 btn btn-primary" value="submit"/>
        </div>
           

            

           
    </form>
     

   </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>