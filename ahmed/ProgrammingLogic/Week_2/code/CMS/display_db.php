<?php include 'config_db.php' ?>
<?php 
// SELECT DB and display

// $query = mysqli_query($connect, "SELECT * FROM ck_post");

$sql = "SELECT * FROM `ck_post` WHERE `id` = 12";
$result = $connect->query($sql);

if($result->num_rows > 0){
	//output data
	while($row = $result->fetch_assoc()){
		echo $row['content'];
		// var_dump($row['content']);
	}

}else{
	echo '0 results';
}
$connect->close();

// while( $row = mysqli_fetch_array($query) ){
// 	var_dump($row['content']);
// }
// if($query){
// 	echo $query;
// }else{
// 	die('ERROR');
// }
?>