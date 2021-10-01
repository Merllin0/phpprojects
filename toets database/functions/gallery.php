<?php
function gallery($path='/', $extensions='png')
{
  $arrayImages = glob($path . "/*.{" . $extensions . "}", GLOB_BRACE);
  $render = null;
  foreach ($arrayImages as $key => $imagePath) {
    $render .= '<img class="img" src="' . $imagePath . '">';
  }
  return $render;
}

$gallery = gallery('images','jpg');
?>
