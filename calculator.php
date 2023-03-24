<!DOCTYPE html>
<html lang="en">
<head>
<!-- <style>
h1 {text-align: center;} -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .button{
            background-color: red;
            box-shadow: 10px 10px 10px black;
            
        }
        .button:hover{
    background-color:lightblue;
    box-shadow: 10px 10px 10px green;
        }
    </style>

</head>
<body>
<?php
$a=0;
$b=0;
$result=0;
$ispostback=(isset($_REQUEST["check"]))?
true:false;
if ($ispostback)
{
    $a=$_REQUEST["a"];
    $b=$_REQUEST["b"];
    $cmd=$_REQUEST["cmd"];
    if ($cmd == "Add")
        $result=$a+$b ;
    if ($cmd == "Sub")
        $result=$a-$b;
    if ($cmd == "Mul")
        $result=$a*$b;
    if ($cmd == "Div")
        $result=$a/$b;
}

?>
<form method="GET">
<center>
    <h1 style="background-color:tomato;" > Calculator</h1>
<input type="hidden" value="1" name="check"/>
First Number <input style="background-color:lightpink;" value="<?php echo $a; ?>"  name="a"><br>
<br>
Second Number <input style="background-color:lightpink;" type="number" value="<?php echo $b; ?>" name="b">

<br>

<br>
<input style="background-color:lightgreen;"type="submit" name="cmd" value="Add">
<input style="background-color:lightgreen;"type="submit" name="cmd" value="Sub">
<input style="background-color:lightgreen;"type="submit" name="cmd" value="Mul">
<input style="background-color:lightgreen;"type="submit" name="cmd" value="Div">

<h2 style="background-color:yellow;">  Result = <?php echo $result; ?> </h2>
<button style="background-color:lightgreen;">Submit</button> 
</center>
</form>
</body>
</html>