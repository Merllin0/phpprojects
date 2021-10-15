<?php
class calc{

  public function omtrek($x, $y, $z)
  {
    return $x + $y * $z;
  }
  public function opervlakte($x, $y)
  {
    return $x * $y;
  }
  public function inhoud($x, $y, $z)
  {
    return $x * $y * $z;
  }
}
$oSom = new calc();
$omtrek = $oSom->omtrek(10,10,2) ;
$opervlakte= $oSom->opervlakte(10, 10);
$inhoud = $oSom->inhoud(10, 10, 10);
?>

<html>
<body>
<?php
echo  $omtrek;
echo "<br>";
echo  $opervlakte;
echo "<br>";
echo  $inhoud;
echo "<br>";

?>
</body>
</html>
