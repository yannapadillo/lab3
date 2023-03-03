<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snake Game</title>
    <link rel="stylesheet" href="css/snake.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="js/snake.js" defer></script>
  </head>
<?php echo link_tag('css/styles.css'); ?>
<?php echo link_tag('js/main.js'); ?>
<header class="l-header">
    <nav class="nav bd-grid">
      <div>
        <!-- &#60;&#62; -->
        <a href="/~lzpadillo/lab3/ci4/public/home#home" class="nav-logo"><img src="img/h.png" height="70px" alt="H" /></a>
      </div>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/home#home" class="nav-link home active">Home</a>
          </li>
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/home#about" class="nav-link about">About</a>
          </li>
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/home#skills" class="nav-link skills">Skills</a>
          </li>
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/home#projects" class="nav-link projects">Projects</a>
          </li>
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/home#contact" class="nav-link contact">Contact</a>
          </li>
          <li class="nav-item">
            <a href="http://apcwebprog.csf.ph/~lzpadillo/lab3/ci4/public/guests" class="nav-link contact">Guests</a>
          </li>
          <li class="nav-item">
            <a href="/~lzpadillo/lab3/ci4/public/news" class="nav-link news">News</a>
          </li>
          <li class="nav-item">
          <a href = "#" onclick="myFunction()"> <img src="img/sumoon.png" alt="" height="20px" width="20px" style="background-color: transparent;"> </a>
          </li>
        </ul>
      </div>

      <div class="nav-toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
      </div>
    </nav>
  </header>
  <script src="js/main.js"></script>
  <body>
    <div class="wrapper">
      <div class="game-details">
        <span class="score">Score: 0</span>
        <span class="high-score">High Score: 0</span>
      </div>
      <div class="play-board"></div>
      <div class="controls">
        <i data-key="ArrowLeft" class="fa-solid fa-arrow-left-long"></i>
        <i data-key="ArrowUp" class="fa-solid fa-arrow-up-long"></i>
        <i data-key="ArrowRight" class="fa-solid fa-arrow-right-long"></i>
        <i data-key="ArrowDown" class="fa-solid fa-arrow-down-long"></i>
      </div>
    </div>

  </body>
</html>