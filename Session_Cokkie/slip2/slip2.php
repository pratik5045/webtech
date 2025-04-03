<?php
setcookie("style",$_POST['style']);
setcookie("size",$_POST['size']);
setcookie("color",$_POST['color']);
setcookie("bgcolor",$_POST['bgcolor']);
echo"Style:".$_COOKIE["style"]."<br>";
echo"size:".$_COOKIE["size"]."<br>";
echo"color:".$_COOKIE["color"]."<br>";
echo"bgcolor:".$_COOKIE["bgcolor"]."<br>";
?>
<html>
  <body>
  <form action="slip21.php" method="post">
    Confirm your Styling:<input type="submit">
</body>
  </html>