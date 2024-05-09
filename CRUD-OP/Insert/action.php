<?php 
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","BKC");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$inser="INSERT INTO Student(ID,NAME,PHONE,ADDRESS)VALUES('$id','$name','$phone','$address')";
$run=mysqli_query($conn,$inser);
if($run==true){
    echo"Success";
    echo"<a href='../Select/Select.php'>Click to Check Data</a>";
}
else{
    echo"Failed";
}
?>