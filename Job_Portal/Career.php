<!DOCTYPE html>
<html lang="en">
<?php include 'config.php' ?>  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        .main-section1{
            background-image: url('career_image.jpg');
            background-position: center;
            background-size: cover;
            height: 400px;
        }
        .bg-opacity{
            background: linear-gradient(90deg, rgba(0,0,0,0.8), rgba(0,0,0,0));
            height: 400px;
        }
        .main-section2 h1{
            text-align: center;
            color: coral;
            padding-bottom: 20px;
            font-family:Verdana, Geneva, Tahoma, sans-serif ;
        }
        .jobs{
            border: 1px solid black;
            box-shadow: 5px 5px 4px 5px grey;
            margin: 10px;
            padding: 10px;
        }
        .jobs{
            padding:20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .jobs h3{
            color:blue;
        }
        .about-section{
            background-color: #E6E6FA;
            font-family: Georgia;
            
        }
        .about-section h1{
            color: black;
            padding: 30px;
            text-align: center;
        }

        .about-section h2{
            color: blueviolet;
           
        }
        .about_section p{
            padding: 50px;
            padding-top: 20px;
            color:black;
        }
        .about-img{
            float: right;
        }

        .context-dark, .bg-gray-dark, .bg-primary {
            color: rgba(255, 255, 255, 0.8);
        }
        .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
            color: #ffffff;
        }
        
    </style>
    <title>Career</title>

</head>

<body style="margin:0; padding:0;">
<div class="main-section1">
   <div class="bg-opacity">
      <center><h2><img src="Logo.png" alt="" style="height:300px; margin-top:20px" ></h2>
                    <h1 class="display-4" style="color:white; font-family:font-serif;">Job Portal</h1></center>
    </div>
</div>
<br>
<div class="main-section2">
  <h1>Potential Job Openings</h1><br>  
  </div>
  <br>
    <div class="row m-0">
        <?php
        $sql="SELECT cname, position, Jdesc, skills, CTC FROM jobs";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <div class="col-md-4">
                    <div class="jobs">
                        <h3 style="text-align: center;">'.$rows['position'].'</h3>
                        <h4 style="text-align: center;">'.$rows['cname'].'</h4>
                        <p style="color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
                        <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
                        <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                            Apply Now
                        </button>
                    </div>
                </div>';
            }
        }
        ?>
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Jobs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For </label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification </label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>


<div class="container about-section">
        <h1 style="color">About Us</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="about-content">
                    <h2>Our Mission</h2>
                    <p >
                    Our mission is to enhance client and candidate satisfaction by increasing the quality of sourcing, boost better recruiting practices that are focused on long-term hires and building employer and employee relationships. We strive to improve the overall process of recruitment online and offline.</p>
                    <br>
                    <h2>Our Vision</h2>
                    <p style= color:Black >
                    1. Respect for Self and Others <br>
                    2. Professionalism <br>
                    3. Model Workplace <br>
                    4. Community Participation <br>
                    5. Future Focussed <br>
                    <br>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src="logo.png" height="300px" width="auto" alt="About Image">
                </div>
            </div>
        </div>
</div>
</div>
<br>
<br>
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
    <div class="container">
        <div class="row row-30">
            
            <div class="col-md-4">
                <br>
              <h4>Contacts</h4>
              <dl class="contact-list">
                <dt>Created By:</dt>
                <dd><u>Ansh Meshram</u></dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">ansh.meshram0405@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+91 9977993540</a> 
                </dd>
              </dl>
            </div>
        </div>
    </div>
</footer>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        
    </body>
</html>

