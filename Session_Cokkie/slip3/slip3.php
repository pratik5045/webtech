<?php
session_start();
if(!isset($_SESSION['cnt']))
  $_SESSION['cnt']=1;
else
  $_SESSION['cnt']++;

if($_SESSION['cnt']<=3)
{
  if($_POST['name']==$_POST['password'])
    echo"welcome".$_POST['name'];
  else
    echo("enter correct info");
}
else
{
  echo"you cross your maximun limits";
  session_destroy();
}
?>
