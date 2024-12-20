<?php
 function gencode($length=6){
  $charcoll='0123456789abcdefghijklmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charlen=strlen($charcoll);
  $captcha='';
  for($i=0;$i<$length;$i++){
   $captcha.=$charcoll[rand(0,$charlen-1)];
  }
  return $captcha;
 }
 echo "Captcha code is ".gencode();
?>