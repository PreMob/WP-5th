<?php
 try{
  $a=10;
  $b=0;
  $result=$a%$b;
  echo $result;
 }
 catch(DivisionByZeroError $e){
  echo $e->getMessage();
 } 
?>