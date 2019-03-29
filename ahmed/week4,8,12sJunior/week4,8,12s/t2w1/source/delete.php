<?php

include("functions/functions.php");

deleteData("form", $_GET["id"]);
header("location: index.php");

?>