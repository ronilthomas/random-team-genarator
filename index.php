<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="UTF-8">
     <meta name="description" content="Free Random Name Picker">
     <meta name="keywords" content="HTML,CSS,XML,JavaScript">
     <meta name="author" content="Thomas Ronil George">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="master.css">
    <title>Random Name Picker</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark">
        <a id="logo" class="navbar-brand">Random Team Picker</a>
      </nav>
    </header>

    <form action="index.php" method="post">
      <div class="form-group col-md-4 mb-3">
      <label for="Textarea1">Enter the names with a comma to seperate them.</label>
      <input class="form-control" name="names" id="Textarea1" rows="6" value="<?php if (isset($_POST["submit"])){$retain = $_POST["names"];echo $retain;} ?>"></input>
      <label for="Textarea2">Enter the number of teams.</label>
      <input class="form-control" name="teams" id="Textarea2" value="<?php if (isset($_POST["submit"])){$retaint = $_POST["teams"];echo $retaint;} ?>"></input>
      <button style="margin-top:10px;" class="btn btn-primary" name="submit" type="submit">Randomize</button>
      </div>
    </form>

  </body>
</html>

<?php
if (isset($_POST["submit"])){
  $text = $_POST["names"];
  $teams = $_POST["teams"];
  $exploded=explode(",",$text);
  $names = $exploded;

  $c=count($names,0);
  if($teams>=$c){
    exit("Please enter more names than the number of teams.");
  }

  if($c>40){
    exit("Only a maximum of 40 names are allowed");
  }

  foreach($names as $name){
    if(empty($name)){
      exit("Please remove extra commas if added accidentally.");
      quit();
    }
    $pattern = '/^[\sa-zA-Z-]+$/';
    if(!preg_match($pattern, $name)){
      echo "Please remove special characters from the list";
    }
  }

  echo '<p style="margin-left:18px;">Number of names entered: '.$c.'</p>';

  shuffle($names);

  echo '<table id="table">'.'<tr>';
  for($l=1;$l<=$teams;$l++){
    echo '<th>'.'Team '."$l".'</th>';
  }
  echo '</tr>';

  echo '<tr>';
  for($k=0;$k<$c;$k++){
    if($k%$teams!=0){
      echo '<td>'.$names[$k].'</td>';
    }
    else
    {
    echo '</tr>'.'<tr>';
    echo '<td>'.$names[$k].'</td>';
    }
  }
  echo '</tr>';
  echo '</table>';

}

?>
