<?php
function bootstrap ($path='functions'){

$arraylibarary = glob($path."/*.php");

foreach ($arraylibarary as $key => $pathfile)
{
  include_once $pathfile;
}
return true;
}
