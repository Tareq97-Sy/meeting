@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
       
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
<div class="container">
    <h1>Create Tarinee</h1>
    <form method="POST" action="{{ route('trainee.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" id="name" name="lastname" required>
        </div>
     
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div>
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password" minlength="8" required autocomplete="new-password">
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="confirm_password" class="form-control" type="password" name="password_confirmation" minlength="8" required autocomplete="new-password">
    </div>

    
        <div class="form-group">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
        </div>
        <button id= "submit_button"type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('trainee.index') }}" class="btn btn-default">Back</a>
    </form>
</div>
</body>
</html>
<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var password_error = document.getElementById("password_error");
    var submit_button = document.getElementById("submit_button");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            password_error.style.display = "block";
            submit_button.disabled = true;
        } else {
            password_error.style.display = "none";
            submit_button.disabled = false;
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
@endsection