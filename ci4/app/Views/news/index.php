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

<p>Want to submit an article? <?= anchor("news/create", "You can do so here!") ?></p>
<?php if (!empty($news) && is_array($news)) : ?>

  <?php foreach ($news as $news_item) : ?>

    <h2>News Archive</h2>

    <div class="main">
      <?= esc($news_item['body']) ?>
    </div>
    <p>
      <?= anchor("news/" . esc($news_item['slug'], 'url'), "View article") ?>
    </p>

  <?php endforeach ?>

<?php else : ?>

  <h2>No News</h2>

  <p>Unable to find any news for you.</p>

<?php endif ?>
</body>
</html>
