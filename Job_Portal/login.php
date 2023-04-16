<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <style type="text/css">
        body{
            background-image: url(image.jpg);
            background-size: cover;
            color:black;
        }
        form{
            background-color:rgba(255,255,255,0.9);
            color: black;
            margin-top: 8em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 5px 10px #888;
        } 
        
    </style>

</head>
<body>
    <div class="container">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <p style="text-align:center;">New User? <br>Create Account <a href="Register.php">Sign Up</a></p>
</form>    
    </div>
</body>
</html>