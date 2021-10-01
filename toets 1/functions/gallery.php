<?php
function gallery($path, $extentions="png"){
  $arrayimages = glob($path."/*.{".$extentions."}", GLOB_BRACE);
    $render=null;
  foreach ($arrayimages as $key=>$imagepath){
    $render.='<img class="img" src"'.$imagepath.'">';
  }
  return $render;
}

?>
