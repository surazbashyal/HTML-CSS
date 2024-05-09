<?php
session_start();
?>
<html>
    <body>
        <form method="post" action="abc.php">
            Name: <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>">
            Address: <input type="text" name="address" value="<?php echo $_SESSION['address'];?>">
</form>
</body>
</html>