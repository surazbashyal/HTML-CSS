<?php
$conn=mysqli_connect("localhost","root","","BKC");
$query="SELECT * FROM Student";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);
if($total!=0){
    echo"<table border='1'>";
    echo"<tr>";
    echo"<th>ID</th>";
    echo"<th>NAME</th>";
    echo"<th>PHONE</th>";
    echo"<th>ADDRESS</th>";
    echo"<th colspan=2>Options</th>";
    echo"</tr>";
    
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo"<td>".$row['ID']."</td>";
        echo"<td>".$row['NAME']."</td>";
        echo"<td>".$row['PHONE']."</td>";
        echo"<td>".$row['ADDRESS']."</td>";
        echo"<td><a href='../Update/update.php?id=$row[ID]&sn=$row[NAME]&pn=$row[PHONE]&an=$row[ADDRESS]'> Edit</a></td>";
        echo"<td><a href='../Delete/delete.php?id=$row[ID]'> Delete</a></td>";
        echo"</tr>";`
    }
    echo"</table>";
echo "<a href='../Insert/Form.html'>Click here to insert more data</a> ";

}
?>
