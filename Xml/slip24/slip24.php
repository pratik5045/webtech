<?php
echo"Student Persuning:".$_POST["course"]."<br>";
$xml=simplexml_load_file("student.xml");
echo"<table border=1><tr><th>sname</th><th>saddr</th><th>colleg name</th></tr>";
foreach($xml as $stud)
{
 
  if($stud->course==$_POST["course"])
  {
    echo"<tr>";
  echo"<td>".$stud->sname."</td>";
  echo"<td>".$stud->saddr."</td>";
  echo"<td>".$stud->college."</td></tr>";
  }
}
echo"</table>"
?>