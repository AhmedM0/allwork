<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Custom CMS | CKeditor</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">

	<!-- Ckeditor js connection -->
	<script src="ckeditor/ckeditor.js"></script>
	
	<!-- Jodit js connection -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<h2>CKeditor</h2>
				<form action="display_data.php" method="post">
					<textarea class="ckeditor" name="myEditor" id="myText" cols="30" rows="10"></textarea>
					<input type="submit" value="SEND DATA">
				</form>
				<?php if( isset($_POST['myEditor']) ): ?>
				<p>
				<?php $text = $_POST['myEditor']; ?>
				<!-- DB logic -->
				<?php include 'config_db.php'; ?>
				<?php include 'insert_db.php'; ?>

				</p>
				<?php endif; ?>
			</div>
		
		</div>
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<h2>Jodit editor</h2>
					<textarea id="editor" name="editor" cols="30" rows="10"></textarea>
					<script>var editor = new Jodit('#editor');</script>
			</div>
		</div>
	

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>