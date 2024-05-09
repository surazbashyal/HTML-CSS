<?php
$conn = mysqli_connect("localhost", "root", "", "BKC");

$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$query = "UPDATE Student SET NAME='$name', ADDRESS='$address', PHONE='$phone' WHERE ID='$id'";

$data = mysqli_query($conn, $query);

echo "Button was clicked.<br>";

if ($data) {
    echo "Record updated successfully. <a href='../Select/select.php'>Click here to check updated record</a>";
} else {
    echo "Record update unsuccessful.";
}
?>
