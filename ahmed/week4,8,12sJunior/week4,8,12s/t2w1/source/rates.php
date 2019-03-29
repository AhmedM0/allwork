<?php 
include("functions/functions.php");
include("partials/header.php");

$arrImages = getData("SELECT * FROM photos");
$arrPackageImages = getData("SELECT * FROM packages");
$arrHeroImage = getData("SELECT * FROM hero");

?>

<div class="holder">
<div class="rateContainer">
<h1 class="porttitle">Wedding Rates</h1>    
<div class="package col-3 col-12">    
<h1 class="packageTitle">Sapphire package</h1>
<ul class="packageList">
    <li class="listSpace">100+ well shot images.</li>
    <li class="listSpace">Montages can be made.</li>
    <li class="listSpace">Can now choose the scenery</li>
</ul>
</div>
<div class="package col-3 col-12">
    <h1 class="packageTitle">Diamond package</h1>
    <ul class="packageList">
        <li class="listSpace">Lorem amet consecteture Debitis.</li>
        <li class="listSpace">Lorem ipsum dolor sit amet.</li>
        <li class="listSpace">Lorem ipsum</li>
    </ul>
</div>
<div class="package col-3 col-12">
        <h1 class="packageTitle">Platinum package</h1>
        <ul class="packageList">
            <li class="listSpace">Lorem amet consecteture Debitis.</li>
            <li class="listSpace">Lorem ipsum dolor sit amet.</li>
            <li class="listSpace">Lorem ipsum</li>
        </ul>
    </div>

    <h1 class="porttitle">Portrait Rates</h1>    
<div class="package col-3 col-12">    
<h1 class="packageTitle">Sapphire package</h1>
<ul class="packageList">
<li class="listSpace">100+ well shot images.</li>
    <li class="listSpace">Montages can be made.</li>
    <li class="listSpace">Can now choose the scenery</li>
</ul>
</div>
<div class="package col-3 col-12">
    <h1 class="packageTitle">Diamond package</h1>
    <ul class="packageList">
        <li class="listSpace">Lorem amet consecteture Debitis.</li>
        <li class="listSpace">Lorem ipsum dolor sit amet.</li>
        <li class="listSpace">Lorem ipsum</li>
    </ul>
</div>
<div class="package col-3 col-12">
        <h1 class="packageTitle">Platinum package</h1>
        <ul class="packageList">
            <li class="listSpace">Lorem amet consecteture Debitis.</li>
            <li class="listSpace">Lorem ipsum dolor sit amet.</li>
            <li class="listSpace">Lorem ipsum</li>
        </ul>
    </div>


    <h1 class="porttitle">Family Rates</h1>    
<div class="package col-3 col-12">    
<h1 class="packageTitle">Sapphire package</h1>
<ul class="packageList">
<li class="listSpace">100+ well shot images.</li>
    <li class="listSpace">Montages can be made.</li>
    <li class="listSpace">Can now choose the scenery</li>
</ul>
</div>
<div class="package col-3 col-12">
    <h1 class="packageTitle">Diamond package</h1>
    <ul class="packageList">
        <li class="listSpace">Lorem amet consecteture Debitis.</li>
        <li class="listSpace">Lorem ipsum dolor sit amet.</li>
        <li class="listSpace">Lorem ipsum</li>
    </ul>
</div>
<div class="package col-3 col-12">
        <h1 class="packageTitle">Platinum package</h1>
        <ul class="packageList">
            <li class="listSpace">Lorem amet consecteture Debitis.</li>
            <li class="listSpace">Lorem ipsum dolor sit amet.</li>
            <li class="listSpace">Lorem ipsum</li>
        </ul>
    </div>

</div>
</div>
