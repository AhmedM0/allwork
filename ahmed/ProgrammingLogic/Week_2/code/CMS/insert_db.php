<?php include 'config_db.php' ?>
<?php 
// insert into db

$query = mysqli_query($connect, "INSERT INTO ck_post (content) VALUES ('$text')");
if($query){
	echo 'ADDED TO DB';
}else{
	echo 'Error inserting to DB';
}
?>