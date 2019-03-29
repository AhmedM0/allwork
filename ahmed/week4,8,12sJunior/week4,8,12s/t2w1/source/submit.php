<!DOCTYPE html>
<html>
<head>
  <title>Cities Listing</title>
  <style>
    * {font-family: arial; font-size: 15px;}
    #cooltable {}
    #cooltable .row {overflow: auto;}
    #cooltable .row div { float: left; width: 20%; text-align: center;}
    #cooltable .thead {background: maroon;}
    #cooltable .thead .chead {font-weight: bold; text-align: center; color: #fff;}
    #cooltable .trow:nth-child(even){background: #ccc;}
    a.btn {display: inline-block; background: tomato; border-radius: 10px; padding: 10px; color: #fff; text-decoration: none; margin-bottom: 30px;}
  </style>
</head>
<body>
  <!-- ... here will be a list of my cities -->

  <a href="contact.php" class="btn">Add New City</a>

  <div id="cooltable">
    

    <?php

    include("functions/functions.php");

    $arrFields = array("strFirstName", "strLastName", "strEmail", "nMessage");
    showTableHeader($arrFields);
 
    $results = fetchData("SELECT * FROM form ORDER BY strFirstName");

    
    // getData($result, $arrFields); ?>
    <?php while($row = mysqli_fetch_assoc($results)): ?>
      <p><?= $row['id'] ?><?= $row['strFirstName'] ?><?= $row['strEmail'] ?><?= $row['nMessage'] ?></p>
      
    <?php endwhile; ?>


    
  </div>


</body>
</html>