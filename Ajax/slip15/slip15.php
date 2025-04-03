<?php
// Sample array of suggestions
$suggestions = ["apple", "banana", "orange", "grape", "pineapple", 
                 "watermelon", "mango", "strawberry", "blueberry", "kiwi"];
      if(isset($_GET['input']))
      {
        $match=[];
        $input=$_GET['input'];
        foreach($suggestions as $s)
        {
          if(stripos($s,$input)!==false)
            $match[]=$s;
        }
        if(!empty($match))
        {
          foreach($match as $m)
               echo $m;
              echo"<br>";
        }else{
          echo"no suggestion";
        }
      }
?>
