<?php
function photos(){
  $out = '<h1>Gallery</h1>';
  $out .= gallery('images','png,jpg');

  return $out;
}

?>
