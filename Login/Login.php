<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","BKC");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$select="SELECT * FROM SignUp WHERE Username='$username' AND Password='$password'";
$run=mysqli_query($conn,$select);
if(mysqli_num_rows($run)>0){
    echo"Success";
    echo"<a href='Login.html'>Click to Login Again</a>";
}
else{
    echo"Failed";
    echo"<a href='Login.html'>Click to Login Again</a>";
}
?>