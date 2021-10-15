<?php
class calc{

  public function som1($x, $y)
    {
    return $x + $y;
    }
  public function som2($x, $y)
  {
    return $x - $y;
  }
  public function som3($x, $y)
  {
    return $x / $y;
  }
}
$oSom = new calc();
$var1 = $oSom->som1(10, 10);
$var2= $oSom->som2(10, 10);
$var3 = $oSom->som3(10, 10);
?>
<html>
<body>
<?php
echo  $var1;
echo "<br>";
echo  $var2;
echo "<br>";
echo  $var3;
echo "<br>";

?>
</body>
</html>
