<!DOCTYPE html> 
<html> 
  <body>           
<form method="POST"> 
            Enter a number:  
            <input type="text" name="number"> 
              
            <input type="Submit" 
                value="Get Multiplication Table"> 
        </form> 
</body> 
</html> 
  
<?php 
if($_POST) { 
    $num = $_POST["number"]; 
  
    echo nl2br("<p style='text-align:;'> 
        Multiplication Table of $num: </p> 
    "); 
          
    for ($i = 1; $i <= 10; $i++) { 
        echo ("<p style='text-align:;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p> 
        "); 
    } 
} 
?>