<html>

<style>
body {
    margin: 20px;
  padding: 50px;
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
    


//van invulformulier   
$lengte = $_POST["lengte"];
$breedte = $_POST["breedte"];
$diepte = $_POST["diepte"];
$rand = $_POST["rand"];
$marge = $_POST["marge"];


//berekeningen
$tempInhoud = inhoud($lengte,$breedte,$diepte);
$tempOppervlakte = oppervlakte($lengte,$breedte);
$tempOmtrek = omtrek($lengte,$breedte);
//waternivo is lager dan diepte
$tempInhoudWater = inhoud( $lengte,$breedte,($diepte - $marge));
//totale wandoppervlakte = omtrek * diepte
$tempWandOppervlakte = oppervlakte($tempOmtrek,$diepte);
$tempOppervlakteAfdekzeil = oppervlakte(($lengte+1),($breedte+1));
$tempOppervlakteRand = oppervlakte((2*$rand+$lengte),(2*$rand+$breedte))-$tempOppervlakte;
$tempOmtrekAfdekzeil = omtrek(($lengte+1),($breedte+1));
?>
<br/>
<h3>Hier is uw zwembad</h3>
<?php
//controle invoer
echo "Uw invoer: lengte ".$lengte." m.; breedte ".$breedte." m.; diepte ".$diepte." m. <br>";
echo "Uw invoer: rand ".$rand." m.; afstand tot waterpeil ".$marge." m. <br>";
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
echo "Totaaloppervlakte wanden: ".$tempWandOppervlakte." m2.<br>";
echo "<br>";?>
<img src= "vloeropp.png" alt ="afgraving" height = 360px width = 500px>

<?php
echo "Oppervlakte vloer: ".$tempOppervlakte." m2.<br>";
echo "<br>";?>
<img src= "watervolume.png" alt ="afgraving" height = 360px width = 500px> 

<?php
echo "Benodigd water: ".$tempInhoudWater." m3.<br>";
echo "<br>";?>
 <img src= "rand2.png" alt ="afgraving" height = 360px width = 500px>

<?php
echo "Rand om zwembad ".$tempOppervlakteRand." m2.<br>";
echo "<br>";?>


<img src= "afdekzeil.png" alt ="afgraving" height = 360px width = 500px>

</canvas><?php
echo "Oppervlakte afdekzeil: ".$tempOppervlakteAfdekzeil." m2.<br>";
echo "<br>";?>
<img src= "randafwerkingafdekzeil.png" alt ="afgraving" height = 360px width = 500px> 
<?php
echo "Randafwerking afdekzeil: ".$tempOmtrekAfdekzeil." m.<br>";



?>


</body>
</html>