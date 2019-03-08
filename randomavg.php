<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random Avg</title>
  </head>
  <body>

  </body>
</html>

<?php
$expected=3;

for($i=0; $i<3; $i++){
  $ranarray[$i]=rand(1,5);
}

$avg= array_sum($ranarray)/count($ranarray);

if($avg == $expected){
  echo "Success";
}
else{
  echo "Not Yet";
}

print_r($ranarray);



 ?>
