<p>Not yet registered? <?= anchor("guests/create", "Register here!") ?></p>
<h2 class="section-title">Guest List</h2>
<?php if (!empty($guests) && is_array($guests)) : ?>

  <?php foreach ($guests as $guest) : ?>

    <h2><?= esc($guest['name']) ?></h2>

    <p><?= esc($guest['comment']) ?></p>

    <?= anchor("guests/" . esc($guest['id'], 'url'), "View guest details") ?>

  <?php endforeach ?>
  </ul>
<?php else : ?>

  <h2>No Guests</h2>

  <p>Nobody has registered yet.</p>

<?php endif ?>
