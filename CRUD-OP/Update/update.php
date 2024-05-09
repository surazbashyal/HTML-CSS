<?php
$conn=mysqli_connect("localhost","root","","BKC");

?>
<html>
<head>
	<title>CRUD Operation</title>
</head>
<body>
<form action="update1.php" method="POST">
	Roll No:- <input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br><br>
	Name:- <input type="text" name="name" value="<?php echo $_GET['sn']; ?>"><br><br>
	Gender:-<input type="text" name="phone" value="<?php echo $_GET['pn']; ?>"><br><br>
	Phone:- <input type="text" name="address" value="<?php echo $_GET['an']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>
