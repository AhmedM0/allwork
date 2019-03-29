<?php

include("functions/functions.php");

$sql =  "INSERT INTO form (strFirstName, strLastName, strEmail, nMessage)
  VALUES ('".$_POST['strFirstName']."', '".$_POST['strLastName']."', '".$_POST['strEmail']."', '".$_POST['nMessage']."')";

 
saveData($sql);

header("location: index.php");

?>