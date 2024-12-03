<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
{{-- Bootstrap CDN --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="container">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
        </ul>
    </div>
    @endif
    <div class="row col-md-12">
        <h1 class="text-center">Add Employee</h1>
    </div>

    <div class="row col-md-12">
    <form action="{{route('employee.update',$employee->id)}}" method="post">      
              @csrf
              @method('PUT')
            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee Name :</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="{{$employee->fname}}">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee Email :</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$employee->email}}">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee Contact :</label>
                    <input type="number" name="contact" id="contact" class="form-control" value="{{$employee->contact}}">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee Address :</label>
                    <textarea name="address" id="address" row="3" class="form-control" >{{$employee->address}}"</textarea>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee DOB :</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{$employee->dob}}">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group m-3">
                    <label for="name" class="form-label"> Employee Year Of Experience :</label>
                    <input type="number" name="yoe" id="yoe" class="form-control" value="{{$employee->yoe}}">
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group m-3">
                <button class="btn btn-primary mt-3">Submit</button>

                <a href="{{route('employee.list')}}" class="btn btn-danger mt-3">Back</a>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>