<html>
<body>

<?php
if(isset($_POST['formDoor']))
{
  $aDoor = $_POST['formDoor'];
  $N = count($aDoor);
  
  echo("You selected $N door(s): ");
  for($i=0; $i < $N; $i++)
  {
    echo($aDoor[$i] . " ");
  }
}
else if(empty($_POST['formDoor']))
{
  echo("You didn't select any buildings.");
}

?>

</body>
</html>