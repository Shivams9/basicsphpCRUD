<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Form</title>
</head>
<body>
<?php
$a=0;
$b=0;
$result=0;
$ispostback=(isset($_REQUEST["check"]))?true:false;
if ($ispostback)
{
  $a=$_REQUEST["a"];
  $b=$_REQUEST["b"];
  $result=$a+$b;
}
?>
  <form method="GET">
    <input type="hidden" value="1" name="check"/>
A<input type="number" value="<?php echo $a; ?>" name="a">
<br>
B<input  type="number"  value="<?php echo $b; ?>"  name="b">
<br>
<input type="submit" value="Calculate">
<br>
<h2>Result = <?php echo $result; ?> </h2>
</form>
</body>
</html>