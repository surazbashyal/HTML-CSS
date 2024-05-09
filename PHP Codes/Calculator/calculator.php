<?php
$a=$_POST['num1'];
$b=$_POST['num2'];
$o=$_POST['operation'];
switch ($o) {
    case '+':
        echo $a+$b;
        echo "</br><a href='Calculator.html'>Go Back</a>";
        break;
    case '-':
        echo $a-$b;
        echo "</br><a href='Calculator.html'>Go Back</a>";
        break;
    case '*':
        echo $a*$b;
        echo "</br><a href='Calculator.html'>Go Back</a>";
        break;
    case '/':
        echo $a/$b;
        echo "</br><a href='Calculator.html'>Go Back</a>";
        break;
    default:
        echo "Invalid Operation";
        echo "</br><a href='Calculator.html'>Go Back</a>";
        break;
}