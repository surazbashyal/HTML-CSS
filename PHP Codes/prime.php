<?php
echo"<form method='post' action='prime.php'>
Num: <input type='number' name='num'>
<input type='submit' name='Check' value='Check'>
<input type='submit' name='Reverse' value='Reverse'>";
if(isset($_POST['Check'])){
    $num=$_POST['num'];
    $flag=0;
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            $flag=1;
            break;
        }
    }
    if($flag==1){
        echo"Not Prime";
    }
    else{
        echo"Prime";
    }
}
if(isset($_POST['Reverse'])){
    $num=$_POST['num'];
    $rev=0;
    while($num!=0){
        $rem=$num%10;
        $rev=$rev*10+$rem;
        $num=$num/10;
        $num=(int)$num;
    }
    echo $rev;
}
?>

