<html>

<style>
body {
    margin: 20px;
  padding-left: 500px;
  margin-top: 50px;
  font-family: sans-serif;
  font-size: 20px;
  letter-spacing: 0px;
  justify-content: center;
  text-align: left;
  background: #66ccff;
}

button {
  text-transform: uppercase;
  padding: 20px;
  margin: 50px;
  background: green;
  color: white;
  border-radius: 15px;
}

button:hover{
  color: green;
  border: 1px solid green;
  background: white;
}

input{
 min-width: 75px;
 min-height: 75px;
 font-size: 2em;
 border-radius: 15px;
}



</style>
<body>
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
    function aantalTegels($lengte,$breedte){
        $aantalTegels = 0;
        $aantalTegels = ($lengte/0.3)*($breedte/0.3);
        $afgerondAantalTegels = ceil($aantalTegels);
        return $afgerondAantalTegels;


    }
    


//van invulformulier   
$lengte = $_POST["lengte"];
$breedte = $_POST["breedte"];
$diepte = $_POST["diepte"];
$rand = $_POST["rand"];
$marge = $_POST["marge"];
$bekleding = $_POST["bekleding"];


//berekeningen
$tempInhoud = inhoud($lengte,$breedte,$diepte);
$tempOppervlakte = oppervlakte($lengte,$breedte);

$tempOmtrek = omtrek($lengte,$breedte);
//waternivo is lager dan diepte
$tempInhoudWater = inhoud( $lengte,$breedte,($diepte - $marge));
//totale wandoppervlakte = omtrek * diepte
$tempWandOppervlakte = oppervlakte($tempOmtrek,$diepte);
$tempAantaltegelsWanden = aantalTegels($tempOmtrek,$diepte);
$tempOppervlakteAfdekzeil = oppervlakte(($lengte+1),($breedte+1));
$tempAantaltegelsVloer = aantalTegels($lengte,$breedte);

$tempOppervlakteRand = oppervlakte((2*$rand+$lengte),(2*$rand+$breedte))-$tempOppervlakte;
$tempAantaltegelsRand = ceil($tempOppervlakteRand/0.09);

$tempOmtrekAfdekzeil = omtrek(($lengte+1),($breedte+1));
?>

<h3>Uw zwembad:</h3><br>

<?php
echo "Uw zwembad wordt ".$lengte." m. lang, ".$breedte." m. breed en ".$diepte." m. diep.<br>";
echo "Het krijgt een rand van ".$rand." m. <br> Het zwembad wordt tot ".$marge." m. onder de rand gevuld. <br>";
echo "<br>";
?>


<img src= "afgraving.png" alt ="afgraving" height = 360px width = 500px> 
<?php
echo "<br>";
echo "<br>";
echo "Af te graven grond: ".$tempInhoud." m3.<br>";
echo "<br>";?>


<img src= "oppwanden.png" alt ="afgraving" height = 360px width = 500px> 
<?php
echo "<br>";
echo "<br>";
if ($bekleding == "Geschilderd") {
echo "Totaaloppervlakte wanden: ".$tempWandOppervlakte." m2.<br>";
}
else {
echo "Benodigd aantal wandtegels: ".$tempAantaltegelsWanden." st.<br>";
}

echo "<br>";?>


<img src= "vloeropp.png" alt ="afgraving" height = 360px width = 500px>
<?php
echo "<br>";
echo "<br>";
if ($bekleding == "Geschilderd") {
echo "Oppervlakte vloer: ".$tempOppervlakte." m2.<br>";
}
else {
   echo "Aantal vloertegels: ".$tempAantaltegelsVloer." st.<br>";
}
echo "<br>";?>


<img src= "watervolume.png" alt ="afgraving" height = 360px width = 500px> 
<?php
echo "<br>";
echo "<br>";
echo "Benodigd water: ".$tempInhoudWater." m3.<br>";
echo "<br>";?>


 <img src= "rand2.png" alt ="afgraving" height = 360px width = 500px>
<?php
echo "<br>";
echo "<br>";
// echo "Rand om zwembad ".$tempOppervlakteRand." m2.<br>";
echo "Aantal randtegels: ".$tempAantaltegelsRand." st.<br>";
echo "<br>";?>


<img src= "afdekzeil.png" alt ="afgraving" height = 360px width = 500px>
</canvas><?php
echo "<br>";
echo "<br>";
echo "Oppervlakte afdekzeil: ".$tempOppervlakteAfdekzeil." m2. <br>";
echo "<br>";?>

<img src= "randafwerkingafdekzeil.png" alt ="afgraving" height = 360px width = 500px> 
<?php
echo "<br>";
echo "<br>";
echo "Randafwerking afdekzeil: ".$tempOmtrekAfdekzeil." m.<br>";

?>


</body>
</html>