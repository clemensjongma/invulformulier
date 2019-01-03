<html>


<?php

    function product($getal1,$getal2) {
        global $e;
        $e = $getal1*$getal2;
    }
    function som($getal3,$getal4)
    {global $som;
        $som =  $getal3 + $getal4;

    }
$x = $_POST["first"];
$y = $_POST["second"];
product($x,$y);
som($x,$y);
echo "de som van de getallen ".$x." en ".$y." is ".$som.".";
?>
<br/>
<?php
echo "Het produkt van de getallen ".$x." en ".$y." is ".$e.".";
echo "<br>";
// echo $_POST["first"]; 
// echo $_POST["second"];
?>

</html>