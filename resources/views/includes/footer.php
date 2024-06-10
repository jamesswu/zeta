<?php

function write_logo() {
  echo '<img src= "img/logo.png" alt="Logo"/>';
}

function create_copyright_notice() {
  $year = date('Y');
  $message = '&copy ' . $year;
  return $message;
}
?>

<footer>
  <?php write_logo(); ?>
    <?= create_copyright_notice(); ?>
</footer>