<?php
$conn = pg_connect("host=localhost dbname=onkar user=onkar password=onkar123");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
if(isset($_GET['name'])&&  isset($_GET['password']))
{
$q="select * from users";
$rs=pg_query($q);
 while($r=pg_fetch_row($rs))
 {
  if($r[0]===$_GET['name']&& $r[1]===$_GET['password'])
  {
    echo("successfully login");
    return;
  }
 }
 echo"enter wrong username and password";
}
?>