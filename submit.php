<?php

$num1=$_POST["fnum"];
$num2=$_POST["snum"];
$op=$_POST["op"];

if($num1=="" or $num2=="")
{
    echo "Please enter two numbers...";
}
else
{
    if($op=="+")
    {
        $res=$num1+$num2;
        echo "The Addition for ".$num1." + ".$num2." = ".$res;
    }
    if($op=="-")
    {
        $res=$num1-$num2;
        echo "The Subtraction for ".$num1." - ".$num2." = ".$res;
    }
    if($op=="*")
    {
        $res=$num1*$num2;
        echo "The Multiplication for ".$num1." * ".$num2." = ".$res;
    }
    if($op=="/")
    {
        $res=$num1/$num2;
        echo "The Division for ".$num1." / ".$num2." = ".$res;
    }
    if($op=="%")
    {
        $res=$num1%$num2;
        echo "The Modulus for ".$num1." % ".$num2." = ".$res;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Answer</title>
</head>
<body>

</body>
</html>