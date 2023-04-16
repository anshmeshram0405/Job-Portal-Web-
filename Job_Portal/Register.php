<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body{
            background-image: url(image.jpg);
            background-size: cover;
            color:black;
        }
        form{
            background-color:rgba(255,255,255,0.9);
            color: black;
            margin-top: 3em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 5px 10px #8888;
        } 
        
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method="POST" >
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" required>
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" name="phone_no" required>
        <div id="numberHelp" class="form-text">Enter valid phone number.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        <div class="col-auto">
        <span id="passwordHelpInline" class="form-text">
          Must be 8-20 characters long.
        </span>
      </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <br>
      Already Registered? <a href="login.php">Login</a>
    </form>
    </div>
</body>
</html>