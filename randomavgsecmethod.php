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

echo "expected number is ".$expected.'<br>';

$numberofattempts = 1;
do{
  for($i=0; $i<3; $i++){
    $ranarray[$i]=rand(1,5);
  }
  $avg= array_sum($ranarray)/count($ranarray);
  echo $avg.'<br>';
  echo "no of att: ".$numberofattempts.'<br>';
  $numberofattempts++;
}while($avg != $expected);

$numberofattempts=$numberofattempts-1;
if($avg == $expected){
  echo "Success in try number ".$numberofattempts;
}



 ?>
