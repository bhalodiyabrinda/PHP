<?php
if(isset($_post['btn'])){
    $a= $_POST['n1'];
    $b= $_POST['n2'];
echo "{$a} <br>$b";
}else{
    echo "you didn't click submit button";
}