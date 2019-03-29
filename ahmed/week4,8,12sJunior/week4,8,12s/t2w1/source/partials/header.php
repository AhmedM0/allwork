<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Cabin|Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv=23 "X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Owen Snaps</title>
</head>
<body>

    <header>
    <img src="images/asset1.png" alt="logo" class="logo">    
    <a class="menu">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
    </a>
    <nav class="gnav">
        <div class="gnav__wrap">
            <ul class="gnav__menu">
                <li class="gnav__menu__item"><a href="index.php">HOME</a></li>
                <li class="gnav__menu__item"><a href="wedding.php">WEDDING</a></li>
                <li class="gnav__menu__item"><a href="portrait.php">PORTRAIT</a></li>
                <li class="gnav__menu__item"><a href="family.php">FAMILY</a></li>
                <li class="gnav__menu__item"><a href="rates.php">RATES</a></li>
                <li class="gnav__menu__item"><a href="about.php">ABOUT</a></li>
                <li class="gnav__menu__item"><a href="contact.php">CONTACT</a></li>
            </ul>
        </div><!--gnav-wrap-->
    </nav>
    <div class="hero"></div>
</header>


<script
     src="https://code.jquery.com/jquery-3.3.1.min.js"
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
<script>

var navFlg = false;
$('.menu').on('click',function(){
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
    if(!navFlg){
        $('.gnav__menu__item').each(function(i){
            $(this).delay(i*300).animate({
                'margin-left' : 0,
                'opacity' : 1,
            },500);
        });
        navFlg = true;
    }
    else{
        $('.gnav__menu__item').css({
            'margin-left' : 100,
            'opacity' : 0,
        });
        navFlg = false;
    }
});
</script>


