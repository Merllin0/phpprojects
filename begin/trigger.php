<?php
include('functions/bootstrap.php');
bootstrap();
$gal = gallery("img");


if (empty($_GET))(['articels ']);{
  $_GET['articles'] = 'home';
}
include ('articels/'.$_GET['articles'].'.php');
$function = $_GET['articles'];
$render = $function();
  print_r($_GET);
?>
<html>
<head>
  <style>
    .gallery {
      height: 100px;
      margin: 3px;
    }
  </style>
</head>
<body>
<nav>
  <a href="functions/2gallery.php">gallery</a>
</nav>
<?php echo $gal; ?>
</body>
</html>
