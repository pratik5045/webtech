<?php
$conn = pg_connect("host=localhost dbname=employees user=onkar password=onkar123");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
$q="select * from teacher";
$rs=pg_query($q);
 while($r=pg_fetch_row($rs))
 {
 echo "<option value='".$r[1]."'>".$r[1]."</option>1";
 }
?>  