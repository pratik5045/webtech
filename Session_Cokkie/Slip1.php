<?php
session_start();
if(! isset($_SESSION['cnt']))
{
  echo" Welcome to our page This is Your First Visit";
  $_SESSION['cnt']=1;
}
else
{
  echo("This is Your ".$_SESSION['cnt']++." Visit");
}
?>