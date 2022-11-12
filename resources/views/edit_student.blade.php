<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
        <div class = "row mt-5 "style="padding-right: 200px" >
            <div class = "col md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <div style = "float:left;">
                            <h2>Edit Student</h2>
                        </div>
                        <div style = "float:right;">
                            <a class = "btn btn-dark" href="{{ route('all.course') }}">Go Back</a>
                        </div>
                    </div>
                    <div class = "card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('msg'))
                            <p class = "alert alert-success">{{ Session::get('msg') }}</p>
                            @endif
                       <form action="{{route('update.student',$student->id)}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Student Name</label>
                                <input type="text" name="Student_name" value="{{$student->Student_name}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Course Name</label>
                               <input type="text" name="Course_name" value="{{$student->Course_name}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Course Fee</label>
                               <input type="text" name="Fee" value="{{$student->Fee}}"class="form-control">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                       </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>
</html>
