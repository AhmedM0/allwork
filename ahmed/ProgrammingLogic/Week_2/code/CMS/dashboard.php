<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dashboard CMS</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/dashboard.css">

<!-- Ckeditor js connection -->
	<script src="ckeditor/ckeditor.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<body>
	<?php include 'config_db.php'; ?>

	<div class="sidebar">
		<h3>Dashboard</h3>
		<a href="post.php" target="_blank">View site</a>
		<ul class="sidebar_nav">
			<li><a href="#">Pages</a></li>
			<li><a href="#" id="postlink">Posts</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</div>
	<div class="main">
		<div class="container-fluid">
			<div class="row" id="post">
				<div class="col-md-10 col-md-offset-2">
					<h2>My Pages</h2>
					<ul>
					<?php 
						$sql = "SELECT * FROM ck_post";
						$result = $connect->query($sql);

						if($result->num_rows > 0){
							//output data
							while($row = $result->fetch_assoc()){ ?>
								<li><a href="#"><?= $row['name'] ?></a></li>
						<?php
							}

						}else{
							echo '0 results';
						}
						$connect->close();
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function(){

			$('#postlink').click(function(event){
				event.preventDefault();
				$('#post').toggleClass('show');
			});
				
		});
		
	</script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>