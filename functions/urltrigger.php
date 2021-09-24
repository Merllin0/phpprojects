<?php
function urltrigger()
{
  if (empty($_GET)){
    $_GET['controller'] = 'home';
  }
  if (!file_exists('content/'.$_GET['controller'].'.php'))
  {
  die('<h1> 404 ERROR</h1>');
  }
  include ('content/'.$_GET['controller'].'.pzzhp');
  $f = $_GET ['controller'];

  return $f();
}
