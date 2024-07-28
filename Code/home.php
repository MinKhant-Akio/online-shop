<?php
    if(isset($_GET['click']))
    {
      if(isset($_GET['click'])=='do')
      {
        header("location:login.php");
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/normalize.css" />
    <link rel="stylesheet" href="../Css/utils.css" />
    <link rel="stylesheet" href="../Css/home.css" />
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@100,500,700&f[]=britney@300,400,700&display=swap" rel="stylesheet"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="../images/fashionlogo.jpg" type="image/x-icon"/>
    <title>Fashion Destiny</title>
  </head>
  <body>
    <?php
        include 'nav.php';
    ?>

    <!-- HOME PAGE CONTENT STARTS HERE -->
    <!-- Hero section -->
    <section class="hero-section container">
      <!-- <h1 class="welcome__title">Woohoo, you made it!</h1>
      <p class="welcome__para">
        Welcome to the land of quirky fashion and endless possibilities. Get
        ready to mix, match, and make a statement like never before. Life's too
        short for boring clothes - let's have some fun!
      </p> -->
      <div class="landing-img"></div>
      <div class="landing-text">
        <p>Get ready to </p>
        <h1>MIX</h1>
        <h1>MATCH</h1>
        <p>and make a statement like never before. </p>
        <a href="#" class="btn-no-bg">Let's explore!</a>
      </div>

    </section>

  </body>
</html>
