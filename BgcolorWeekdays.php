<?php
 $daycolors=["Sunday"=>"blue","Monday"=>"black","Tuesday"=>"green","Wednesday"=>"orange","Thursday"=>"yellow","Friday"=>"red","Saturday"=>"pink"];

 $currentday=date('l');
 $bgcolor="white";

 if(array_key_exists($currentday,$daycolors)){
  $bgcolor=$daycolors[$currentday];
 }
?>

<html>
<head>
 <title>Color of day</title>
 <style>
  body{
   background-color:<?php echo $bgcolor;?>;
  }
 </style>
</head>
<body>
 <h1>Today color is </h1>
</body>
</html>