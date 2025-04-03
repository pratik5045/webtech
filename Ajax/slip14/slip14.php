<?php
$conn = pg_connect("host=localhost dbname=employees user=onkar password=onkar123");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
if(isset($_GET['name']))
{
$q="select * from teacher";
$rs=pg_query($q);
 while($r=pg_fetch_row($rs))
 {
  if($r[1]===$_GET['name'])
  {
    echo$r[0]." ".$r[1]."<br>";
    return;
  }
 }
 echo"enter wrong username and password";
}
?>