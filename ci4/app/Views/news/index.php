<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="img/h1.png" rel="icon" type = "image/x-icon">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =====BOX ICONS===== -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Lyanna Padillo</title>
</head>

<body>
<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/~lzpadillo/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<footer class="footer section" id="contact">
    <div class="footer-social">
      <a href="https://www.linkedin.com/in/lyanna-padillo-8ba1b321a/" target="_blank" class="footer-icon"><i
          class="bx bxl-linkedin">
          <br />
          LinkedIn</i></a>
      <a href="https://twitter.com/LiliArts__" target="_blank" class="footer-icon"><i class="bx bxl-twitter">
          <br />
          Twitter</i></a>
      <a href="mailto:lzpadillo@student.apc.edu.ph" target="_blank" class="footer-icon"><i class="bx bx-mail-send">
          <br />
          E-mail</i></a>
      <a href="tel:+63 9771135400" target="_blank" class="footer-icon"><i class="bx bx-phone">
          <br />
          Phone</i></a>
      <a href="https://github.com/yannapadillo" target="_blank" class="footer-icon"><i
            class="bx bxl-github">
          <br />
          GitHub
          </i></a>
    </div>
    <p>&#169; 2022 copyright all right reserved</p>
  </footer>
</body>
</html>
