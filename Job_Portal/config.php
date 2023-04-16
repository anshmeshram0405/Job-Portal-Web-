<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM user WHERE `email`='$email' AND `password`='$password' ";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC = $_POST['CTC'];
    $job = "INSERT INTO `jobs`(`cname`, `position`, `skills`, `CTC`,`Jdesc` ) VALUES ('$cname','$pos','$skills','$CTC','$Jdesc')";
    mysqli_query($conn, $job);
    
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn, $sql);
}

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `user`(`name`, `email`, `phone_no`,`password`) VALUES ('$name','$email','$phone_no','$password')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully. ";
    } else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($conn);
    }
}

?>