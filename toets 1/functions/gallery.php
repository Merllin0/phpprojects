<?php
function gallery($path, $extentions="png"){
  $arrayimages = glob($path."/*.{".$extentions."}", GLOB_BRACE);
    $render=null;
  foreach ($arrayimages as $key=>$imagepath){
    $render.='<img class="img" src"'.$imagepath.'">';
  }
  return $render;
}

$gallery = gallery("images", "jpg");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>

<style>
  #gallery{
    width: 400px;
    height: 300px;
    background-color: darkslateblue;
    overflow: auto;
  }
  .img{
    height: 90px;
    margin: 5px;
  }
</style>
<body>
<h1>basic html gallery</h1>
<div id="gallery">
<?= $gallery ?>
</div>
</body>
</html>
