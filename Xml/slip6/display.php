<?php
$xml=simplexml_load_file("book.xml");
foreach($xml as $book)
{
  echo"title:".$book->title."<br>";
  echo"author:".$book->author."<br>";
  echo"Price:".$book->price."<br>";
  echo"publisher:".$book->publisher."<br>";
  echo"<hr>";
}
?>