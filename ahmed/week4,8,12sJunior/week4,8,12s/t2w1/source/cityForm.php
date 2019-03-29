<!DOCTYPE html>
<html>
<head>
  <title>Cities Listing</title>
  <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
  <style>
    * {font-family: arial;}
    #cooltable {}
    #cooltable .row {overflow: auto;}
    #cooltable .row div { float: left; width: 25%; text-align: center;}
    #cooltable .thead {background: salmon;}
    #cooltable .thead .chead {font-weight: bold; text-align: center; color: #fff;}
    #cooltable .trow:nth-child(even){background: #ccc;}
    a.btn {display: inline-block; background: tomato; border-radius: 10px; padding: 10px; color: #fff; text-decoration: none; margin-bottom: 30px;}

  form {
    max-width: 1000px;
    margin: 0 auto;
    background-color: red;
    height: 40vh;
    color: white;
    font-size: 25px;
  }

  label {
    font-family: 'Aleo', serif;
  
  }

  input {
    text-align: center;
  }


  </style>
</head>
<body>
  <!-- ... here will be a list of my cities -->

  <a href="index.php">Back to Listing...</a>

  <form method="post" action="save.php">
    <label>Name</label><br/>
    <input type="text" name="strName" value=""/><br/><br/>

    <label>City</label><br/>
    <input type="text" name="nCity" value=""/><br/><br/>

    <label>Number Of Students</label><br/>
    <input type="text" name="nNumberOfStudents" value=""/><br/><br/>

    <label>Picture</label><br/>
    <input type="text" name="nPicture" value=""/><br/><br/>
    
    <input type="submit" value="SAVE">
  </form>

</body>
</html>







