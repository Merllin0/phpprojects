<?php
include 'functions/bootstrap.php';
bootstrap('functions');

$content = urltrigger();
?>

<!DOCTYPE html>
<html>
<body>
<h2>PHP Website</h2>
<nav>
  <a href="oefentoets.php?controller=home">home</a>
  <a href="functions/2gallery.php?controller=photos">gallery</a>
</nav>
<article>
  <?= $content ?>
</article>
</body>
</html>
