<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<form action="{{url('/register')}}" method="post">
    @csrf
            <div class="container">
                <h1 class="text-center">Registation</h1>
                <div class="gorm-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" aria-describedby="helpId" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
                <div class="gorm-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email" aria-describedby="helpId" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="gorm-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Enter Your Password" aria-describedby="helpId">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="gorm-group">
                    <label for="">Password</label>
                    <input type="password" name="password_confirmationu" id="" class="form-control" placeholder="Enter Your Password" aria-describedby="helpId">
                    <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                </div>
                <button class="btn btn-primary">submit</button>
            </div>
</form>

</body>
</html>
