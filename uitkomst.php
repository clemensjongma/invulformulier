<html>


<?php
//benodigde functies
    function oppervlakte($getal1,$getal2) {
        $opp = 0;
        $opp = $getal1*$getal2;
        return $opp;
    }
    
    function som($getal3,$getal4)
    {   $som = 0;
        $som =  $getal3 + $getal4;
        return $som;
    }
    
    function inhoud($lengte,$breedte,$diepte){
        $inhoud = 0;
        $inhoud = $lengte * $breedte * $diepte;
        return $inhoud;
    }

    function omtrek($lengte,$breedte){
        $omtrek = 0;    
        $omtrek = 2 * ($lengte + $breedte);
        return $omtrek;
    }
//van invulformulier   
$lengte = $_POST["lengte"];
$breedte = $_POST["breedte"];
$diepte = $_POST["diepte"];

//berekeningen
$tempInhoud = inhoud($lengte,$breedte,$diepte);
$tempOppervlakte = oppervlakte($lengte,$breedte);
$tempOmtrek = omtrek($lengte,$breedte);
//totale wandoppervlakte = omtrek * diepte
$tempWandOppervlakte = oppervlakte($tempOmtrek,$diepte);
?>
<br/>
<?php
echo "Uw invoer: lengte ".$lengte." m. <br>";
echo "Uw invoer: breedte ".$breedte." m. <br>";
echo "Uw invoer: diepte ".$diepte." m. <br>";

echo "Af te graven grond: ".$tempInhoud." m3.";
echo "<br>";
echo "Totaaloppervlakte wanden: ".$tempWandOppervlakte." m2.";
echo "<br>";
echo "Oppervlakte vloer: ".$tempOppervlakte." m2.";
echo "<br>";
echo "Oppervlakte afdekzeil: ".$tempOppervlakte." m2.";
echo "<br>";
echo "Randafwerking afdekzeil: ".$tempOmtrek." m.";


// echo $_POST["first"]; 
// echo $_POST["second"];
?>

</html>