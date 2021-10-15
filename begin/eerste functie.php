<?php

function hallowereldactie($name , $ja=false)
{
  $bla = "hallo" .$name. "<br>";
    if ($ja== true){
      $bla .="!!!";
    }
    return $bla;
}
?>
<h1>jo</h1>
<?php
  echo hallowereldactie ( "merlijn de man" , $ja true);
?>

