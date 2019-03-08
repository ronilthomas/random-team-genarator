<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Print X Y</title>
  </head>
  <body>

  </body>
</html>

<?php

for($i=-712;$i<=7;$i++){
  if($i%4 == 0 && $i%5 == 0){
    echo "Z ";
  }
  elseif($i%4 == 0){
    echo "X ";
  }
  elseif($i%5 == 0){
    echo "Y ";
  }
  else{
    echo $i." ";
  }

}

 ?>
