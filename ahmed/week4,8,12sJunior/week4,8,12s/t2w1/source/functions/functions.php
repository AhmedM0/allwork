<?php

function connect()
{
    $con = mysqli_connect("192.185.103.168", "ahmedm00_roots", "ahmed123", "ahmedm00_photos");
  
    return $con;
}

function fetchData($sql) {
  $con = connect(); // call the connect function and return $con;
  $results = mysqli_query($con, $sql);

  return $results;
}

function getData($sql)
{
    $con = connect(); // call the connect function and return $con;
    $results = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($results))
    {
      $arrAllResults[] = $row;
    }
    return $arrAllResults;
}

function saveData($sql)
{
  $con = connect(); // call the connect function and return $con;
  mysqli_query($con, $sql);
}

function deleteData($table, $id)
{
  $con = connect(); // call the connect function and return $con;
  mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
}

function showData($result, $arrFields)
{
   while($arrData = mysqli_fetch_assoc($result))
    {
    ?>
      <div class="trow row">
        <?php
        foreach($arrFields as $fieldName)
        {?>
            <div><?=$arrData[$fieldName]?></div>
        <?php 
        }?>
        <div><a href="delete.php?id=<?=$arrData["id"]?>">Delete</a></div>
      </div>
    <?php
    }
}

function showTableHeader($arrFields)
{
    ?>
    <div class="thead row">

    <?php
    foreach($arrFields as $fieldName)
    {?>
        <div class="chead"><?=$fieldName?></div>
    <?php 
    }?>
    
      
      <div class="chead">Delete</div>
    </div>
  <?php
}


?>