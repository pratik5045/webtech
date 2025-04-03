<?php
if(isset($_GET['name']))
{
  $name=$_GET['name'];  
$player=['rohit','virat', 'Dhoni',
'Ashwin','Harbhajan'];
if($name=="")
{
  echo"Stranger please tell me your name";
}
  else if(in_array($name,$player))
  {
    echo" $name heelo master";
  }
  else{
    echo"Stranger $name i dont know you";
  }

}
?>