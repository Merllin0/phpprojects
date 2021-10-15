<html>
<head>
  <title>Gallery</title>
  <meta charset="UTF-8">
  <link href="phpf-01.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>
  <?php
  $dir = glob('afbeeldingen/{*.jpg,*.png}', GLOB_BRACE);
  foreach ($dir as $key => $value) {
    ?>
    <div class="plaatjes">
      <a href ='<?php echo $value ?>' data-fancybox="afbeeldingen" data-caption="<?php echo $value;?>">
        <img src="<?php echo $value; ?>">
      </a>
      <h1 class="caption">plaatjes voor de maatjes</h1>
    </div>
    <?php
  }
  ?>
</main>
</body>
</html>
