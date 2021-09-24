<?php

function trigger()
{
  if (empty($_GET))(['articels ']);
  {
    $_GET['articles'] = 'home';
  }
  include ('articels/'.$_GET['articles'].'.php');
  $function = $_GET['articles'];
  return = $function();

}
?>
