<?php
function compute()
{
  $num1 = $_POST['eerstenummer'];
  $num2 = $_POST['tweedenummer'];

  switch ($_POST['getallen'])
  {
    case "plus":
      $sum = $num1 + $num2;
      return $sum;
      break;
    case "min":
      $diff = $num1 - $num2;
      return $diff;
      break;
    case "keer":
      $prod = $num1 * $num2;
      return $prod;
      break;
    default:
      echo "hallo";

  }
}
echo "de uitslag is" . compute( )
?>
<br>
<a href="rekenmachinefunction.php">terug</a>

