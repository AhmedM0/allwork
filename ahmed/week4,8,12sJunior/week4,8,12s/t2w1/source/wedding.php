<?php 
include("functions/functions.php");
include("partials/header.php");

$arrImages = getData("SELECT * FROM photos");
$arrPackageImages = getData("SELECT * FROM packages");
$arrHeroImage = getData("SELECT * FROM hero");
$arrWeddingSlides = getData("SELECT * FROM wedding_slider");
?>
    
<article class="text"  class="col-6">
<h1>There is a reality so subtle that it becomes more real than reality.</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi impedit quaerat fugit officia voluptas? Quos voluptas, repellendus placeat animi unde nisi cupiditate? Ipsum, voluptatem. Blanditiis nesciunt cumque quo aut?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi impedit quaerat fugit officia voluptas? Quos voluptas, repellendus placeat animi unde nisi cupiditate? Ipsum, voluptatem. Blanditiis nesciunt cumque quo aut?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi impedit quaerat fugit officia voluptas? Quos voluptas, repellendus placeat animi unde nisi cupiditate? Ipsum, voluptatem. Blanditiis nesciunt cumque quo aut?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi impedit quaerat fugit officia voluptas? Quos voluptas, repellendus placeat animi unde nisi cupiditate? Ipsum, voluptatem. Blanditiis nesciunt cumque quo aut?</p>
</article>


<div id="wrapper" class="col-6">
    <!-- this is the entire slide show component -->
    <div id="slider">
      <div class="mask">
        <div class="slides" id="slideHandle">
        <?php foreach($arrWeddingSlides as $weds): ?>
          <div class="img"><img id="image<?= $weds["id"]?>" class="photo" src="images/<?= $weds["strWeddingFile"] ?>"></div>
          <?php endforeach; ?> 
        </div>
      </div>
    </div>
  </div>

  <div class="slidebtn">
<a href="#" id="prev">Prev</a>
<a href="#" id="next">Next</a>
</div>

<script type="text/javascript" src="js/slider.js"></script>
<div class="card-deck">
  <div class="card">
    <img src="images/wedding6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Public Wedding</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Los Angeles</small>
    </div>
  </div>
  <div class="card">
  <img src="images/wedding7.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Town Wedding</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">New York</small>
    </div>
  </div>
  <div class="card">
  <img src="images/wedding8.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Scenery Wedding</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Boston</small>
    </div>
  </div>
</div>

<?php
include("partials/footer.php")
?>

