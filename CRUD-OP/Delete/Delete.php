<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","BKC");
$query="Delete from Student WHERE id=$id";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "Record deleted successfully <a href='../Select/select.php'>Click me here to check delete record </a> ";
}
