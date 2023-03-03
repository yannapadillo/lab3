<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <a href="http://apcwebprog.csf.ph/~lzpadillo/lab3/ci4/public/guests" class="nav-link guests">Guests</a>
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
</head>
<body>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="<?= base_url() . "/guests/create" ?>" method="post">
  <?= csrf_field() ?>

  <?php
  $field_names = ["name", "email", "website"];
  foreach ($field_names as $field_name) :
  ?>
    <?= form_label(ucfirst($field_name), $field_name) ?>
    <br />
    <?= form_input($field_name, set_value($field_name), [
      "placeholder" => "Your " . $field_name . "...",
    ]) ?>
    <br />
    <br />
  <?php endforeach?>

  <?= form_label("Comment", "comment") ?>
  <br />
  <?= form_textarea("comment", set_value("comment"), [
    "cols" => "45",
    "rows" => "4",
    "placeholder" => "Comments...",
  ])?>
  <br />
  <br />

  <?= form_label("Gender", "gender") ?>
  <br />
  <?php $genders = ["female", "male", "other"];
  foreach($genders as $gender) :
  ?>
    <?= form_radio("gender", $gender, set_value("gender") == $gender) ?>
    <?= ucfirst($gender) ?>
    <br />
  <?php endforeach?>
  <br />

  <input type="submit" name="submit" value="ADD GUEST">
</form>
  </body>
  </html>