<?php 
include("functions/functions.php");
include("partials/header.php");

$arrImages = getData("SELECT * FROM photos");
$arrPackageImages = getData("SELECT * FROM packages");
$arrHeroImage = getData("SELECT * FROM hero");

?>

	<?php foreach($arrImages as $photos): ?>
	<div>
		<img id="image<?= $photos["id"]?>" class="photo1" src="images/<?= $photos["strFileName"] ?>">
	</div>
	<?php endforeach; ?>
	<!-- start of packages -->
		<h1 class="packageTitle">packages</h1>
	<?php foreach ($arrPackageImages as $PackagePhotos) : ?>
	<div class="max">
	<div class="packageCol">
		<img id="image<?= $PackagePhotos["id"]?>"src="images/<?= $PackagePhotos["strPackageName"] ?>" class="packages">
		<span class="lineBreak"><a href="#" class="packageButton"><?= $PackagePhotos["strPackageButton"]?></a></span>
	</div>
	</div>
	<?php endforeach; ?>
	<!-- end of packages -->
	<?php foreach($arrHeroImage as $hero): ?>
	<div class="hero">
		<img id="image<?= $hero["id"]?>" class="indexHero" src="images/<?= $hero["strHeroName"] ?>">
		<div class="herotext">
		<p id="herotext">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
		<span class="heroSpan">- Tyler Smith</span>
		</div>
		</div>
	<?php endforeach; ?>

</body>
</html>
<?php
include("partials/footer.php")
?>