<?php
function gallery($path='/' , $extentions="png"){
  $arrayimages=glob($path."/*.{".$extentions."}", GLOB_BRACE);
    $render=null;
  foreach ($arrayimages as $key=>$imagepath){
    $render.='<img class="img" src"'.$imagepath.'">';
  }
  return $render;
}

$gallery = gallery("afbeeldingen ", "jpg");
?>
<!doctype html>
<html>
<style>
  #gallery{
    width: 400px;
    height: 300px;
    background-color: red;
    overflow: auto;
  }
  .img{
    height: 100px;
    margin: 5px;
  }
</style>
<body>
<h1>gallery met function</h1>
<div id="gallery">
  <?= $gallery?>
</div>
</body>
</html>
