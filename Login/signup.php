<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","BKC");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$inser="INSERT INTO SignUp(First_Name,Last_Name,Email,Username,Password)VALUES('$fname','$lname','$email','$username','$password')";
$run=mysqli_query($conn,$inser);
if($run==true){
    echo"Success";
    echo"<a href='Login.html'>Click to Login</a>";
}
else{
    echo"Failed";
}
?>