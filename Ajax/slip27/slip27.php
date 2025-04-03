<?php
if(isset($_GET['name']) && isset($_GET['age'])&& isset($_GET['nationality']))
{
  $name=($_GET['name']);
  $age=(int)($_GET['age']);
  $nationality=($_GET['nationality']);
  if(!preg_match("/^[A-Z ]+$/", $name) )
  {
   echo"enetr uppercase name";
   return;
  }
  if($age<18)
  {
  echo"age should be greater than 18";
  return;
  }
  if($nationality!="indian")
  {
    echo"nationality should be indian";
    return;
  }
  echo"enter information is correct";
}
?>