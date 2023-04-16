<!DOCTYPE html>
<?php include 'config.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed; 
    top: 0%; 
    width: 100%; 
  }
  .navitem{
    text-decoration:none;
  }    </style>
    <title>Dashboard</title>
</head>
<body>
    <div>
      <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <center><a class="navbar-brand" href="#"><b>Admin Dashboard</b></a></center>
        <a  href="login.php" style="Border:1px solid blue; padding: 7px; background-color:#0000ff; color: white; text-decoration: none; border-radius: 10px; ">Login</a>
    </div>
  </div>
</nav>

    <!-- The sidebar -->
<div class="sidebar" >
  <a href="index.php" >Jobs</a>
  <a href="jobs.php" >Candidated Applied</a>
  <a href="contact.php">Contact</a>
  <a href="about.php" >About</a>
</div>