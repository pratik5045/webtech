<?php
if(isset($_GET['number']))
{
$n=$_GET['number'];
$a=0;
$b=1;
echo"fibonocci series is";
echo(" ".$a." ".$b." ");
$sum=$a+$b;
while($sum<=$n)
{

  $a=$b;
  $b=$sum;
  echo $sum." ";
  $sum=$a+$b;
 
}
echo"sum of its digit  is";
$sum=0;
while($n>0)
{
  $sum=$sum+$n%10;
  $n=(int)($n/10);
}
echo $sum;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="get" action="<?php echo$_SERVER['PHP_SELF'] ?>">
    Number:<input type="number" name="number">
    <input type="submit">
</form>
</body>
</html>