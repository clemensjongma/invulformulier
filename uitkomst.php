<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link id="pagestyle" rel="stylesheet" type="text/css" href="stylesheet.css">
<!-- <style>
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


</style> -->
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
    function prijs($prijspereenheid,$aantaleenheden){
        $prijs = 0;
        $prijs = $prijspereenheid*$aantaleenheden;
        return $prijs;

    }


//van invulformulier   
$lengte = $_POST["lengte"];
$breedte = $_POST["breedte"];
$diepte = $_POST["diepte"];
$rand = $_POST["rand"];
$marge = $_POST["marge"];
$bekleding = $_POST["bekleding"];
$offerte = $_POST["offerte"];
//gegevens
    if ($bekleding=="Betegeld") {
        
    $prijsWandTegel = 1.4;
    $prijsVloerTegel = 1.36;
    }
    else {
        $prijsWandTegel = 0;
        $prijsVloerTegel = 0;
    }
$prijsRandTegel = 1.5;
$prijsAfdekZeil = 8;
$prijsWater = 1.2;
$prijsRandAfwerking = 4;
$prijsAfgravenGrond = 32;

    if ($bekleding=="Geschilderd") {
    $prijsVerf = 1.5;    
    }
    else {
        $prijsVerf = 0;
    }



//berekeningen
$tempInhoud = inhoud($lengte,$breedte,$diepte);
$tempOppervlakte = oppervlakte($lengte,$breedte);

$tempOmtrek = omtrek($lengte,$breedte);
//waternivo is lager dan diepte
$tempInhoudWater = inhoud( $lengte,$breedte,($diepte - $marge));
//totale wandoppervlakte = omtrek * diepte
$tempWandOppervlakte = oppervlakte($tempOmtrek,$diepte);
$tempAantaltegelsWanden = aantalTegels($tempOmtrek,$diepte);
//afdekzeil is  1m groter dan zwembad
$tempOppervlakteAfdekzeil = oppervlakte(($lengte+1),($breedte+1));
$tempOmtrekAfdekzeil = omtrek(($lengte+1),($breedte+1));

$tempAantaltegelsVloer = aantalTegels($lengte,$breedte);
//berekening rand om zwembad
$tempOppervlakteRand = oppervlakte((2*$rand+$lengte),(2*$rand+$breedte))-$tempOppervlakte;
$tempAantaltegelsRand = ceil($tempOppervlakteRand/0.09);



//Prijsberekeningen
$tempPrijsAfgravenGrond = prijs($prijsAfgravenGrond,$tempInhoud);
$tempPrijsWater = prijs($prijsWater,$tempInhoudWater);
$tempPrijsWandVerf = prijs($tempWandOppervlakte,$prijsVerf);
$tempPrijsWandTegels = prijs($prijsWandTegel,$tempAantaltegelsWanden);
$tempPrijsVloerVerf = prijs($tempOppervlakte,$prijsVerf);
$tempPrijsVloerTegels = prijs($prijsVloerTegel,$tempAantaltegelsVloer);
$tempPrijsRandtegels = prijs($prijsRandTegel,$tempAantaltegelsRand);
$tempPrijsRandafwerkingZeil = prijs($prijsRandAfwerking,$tempOmtrekAfdekzeil);
$tempPrijsAfdekZeil = prijs($tempOppervlakteAfdekzeil,$prijsAfdekZeil);
$tempTotaalPrijs = $tempPrijsAfgravenGrond + $tempPrijsWater +$tempPrijsWandTegels + $tempPrijsVloerTegels +$tempPrijsWandVerf + $tempPrijsVloerVerf +$tempPrijsRandtegels
 + $tempPrijsAfdekZeil + $tempPrijsRandafwerkingZeil
  

?>
<div class="container">
    <h3>Uw zwembad:</h3><br>
    <img src= "alles.png" alt ="alles" height = 360px width = 500px>
    <?php
    echo "<br>";
    echo "Uw zwembad wordt ".$lengte." m. lang, ".$breedte." m. breed en ".$diepte." m. diep.<br>";
    echo "Het krijgt een rand van ".$rand." m. <br> Het zwembad wordt tot ".$marge." m. onder de rand gevuld. <br>";
    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    
    <h3>Af te graven grond:</h3><br>
    <img src= "afgraving.png" alt ="afgraving" height = 360px width = 500px> 
    <?php
    echo "<br>";
    echo "<br>";
    echo "Er moet ongeveer ".$tempInhoud." m3 afgegraven worden.<br>";
    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    <h3>De wanden:</h3><br>
    <img src= "oppwanden.png" alt ="afgraving" height = 360px width = 500px> 
    <?php
    echo "<br>";
    echo "<br>";
    if ($bekleding == "Geschilderd") {
    echo "Er moet ongeveer ".$tempWandOppervlakte." m2 geschilderd worden.<br>";
    }
    else {
    echo "Er zijn ".$tempAantaltegelsWanden." wandtegels nodig.<br>";
    }

    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    <h3>De vloer:</h3><br>
    <img src= "vloeropp.png" alt ="afgraving" height = 360px width = 500px>
    <?php
    echo "<br>";
    echo "<br>";
    if ($bekleding == "Geschilderd") {
    echo "De oppervlakte van de vloer is ".$tempOppervlakte." m2.<br>";
    }
    else {
    echo "Er zijn ".$tempAantaltegelsVloer." vloertegels nodig.<br>";
    }
    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    <h3>Het water:</h3><br>
    <img src= "watervolume.png" alt ="afgraving" height = 360px width = 500px> 
    <?php
    echo "<br>";
    echo "<br>";
    echo "U heeft ".$tempInhoudWater." m3 water nodig.<br>";
    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    <h3>De rand om het zwembad:</h3><br> 
    <img src= "rand2.png" alt ="afgraving" height = 360px width = 500px>
    <?php
    echo "<br>";
    echo "<br>";
    // echo "Rand om zwembad ".$tempOppervlakteRand." m2.<br>";
    echo "Er zijn ".$tempAantaltegelsRand." randtegels nodig.<br>";
    echo "<br>";
    ?>
</div>
<br>
<div class="container">
    <h3>Het afdekzeil:</h3><br>    
    <img src= "afdekzeil.png" alt ="afgraving" height = 360px width = 500px>
    <?php
    echo "<br>";
    echo "<br>";
    echo "Er is een afdekzeil nodig van ".$tempOppervlakteAfdekzeil." m2. <br>";
    echo "<br>";
    echo "Dit kost € ".$tempPrijsAfdekZeil." "?>
</div>
<br>
<div class="container">
<h3>De randafwerking van het zeil:</h3><br>    
<img src= "randafwerkingafdekzeil.png" alt ="afgraving" height = 360px width = 500px> 
    <?php
    echo "<br>";
    echo "<br>";
    echo "De randafwerking van het zeil is ".$tempOmtrekAfdekzeil." m lang.<br>";

    ?>
</div>
<br>


  

<div class="container">
<?php
if ($offerte=="Ja") {
echo "<h3>Offerte</h3><br>";

    echo "De prijs van het afgraven is €".$tempPrijsAfgravenGrond."<br>";

if ($bekleding == "Geschilderd") {
    echo "Er moet ongeveer ".$tempWandOppervlakte." m2 wand geschilderd worden.<br>";
    }
    else {
    echo "De prijs van de wandtegels is €".$tempPrijsWandTegels."<br>";
    }
if ($bekleding == "Geschilderd") {
    echo "Er moet ongeveer ".$tempWandOppervlakte." m2 vloer geschilderd worden.<br>";
    }
    else {
    echo "De prijs van de vloertegels is €".$tempPrijsVloerTegels."<br>";
    }

    
echo "De prijs van het water is €".$tempPrijsWater."<br>";
echo "De prijs van de wandtegels is €".$tempPrijsWandTegels."<br>";
echo "De prijs van de vloertegels is €".$tempPrijsVloerTegels."<br>";
echo "De prijs van muurverf is €".$tempPrijsWandVerf."<br>";
echo "De prijs van vloerverf is €".$tempPrijsVloerVerf."<br>";

echo "De prijs van het afdekzeil is €".$tempPrijsAfdekZeil."<br>";
echo "De prijs van randafwerking van het zeil is €".$tempPrijsRandafwerkingZeil."<br>";
echo "<h3> De totaalprijs van uw zwembad is €".$tempTotaalPrijs."</h3><br>";
}
?>
</div>

</body>
</html>