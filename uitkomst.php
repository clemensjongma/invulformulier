<html>


<?php

    function oppervlakte($getal1,$getal2) {
        global $e;
        $e = $getal1*$getal2;
    }
    
    function som($getal3,$getal4)
    {global $som;
        $som =  $getal3 + $getal4;
    }
    
    function inhoud($lengte,$breedte,$diepte){
        global $inhoud;
            $inhoud = $lengte * $breedte * $diepte;
    }

$lengte = $_POST["lengte"];
$breedte = $_POST["breedte"];
$diepte = $_POST["diepte"];
// oppervlakte($x,$y);
// som($x,$y);
inhoud($lengte,$breedte,$diepte);

?>
<br/>
<?php

echo "De inhoud van uw zwembad is ".$inhoud." m3.";

// echo $_POST["first"]; 
// echo $_POST["second"];
?>

</html>