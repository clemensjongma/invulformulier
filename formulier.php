<html>

<h1>Rekenvel Zwembad </h1>

<form action="uitkomst.php" method="post">
Gewenste lengte in meters: 
<br>
<input type="text" name="lengte" value="<?php echo $lengte;?>">  
<br>
Gewenste breedte in meters: <br>
<input type="text" name="breedte" value="<?php echo $breedte;?>">
<br>
Gewenste diepte in meters: <br>
<input type="text" name="diepte" value="<?php echo $diepte;?>">
<br>
Gewenste rand in meters: <br>
<input type="text" name="rand" value="<?php echo $rand;?>">
<br>
Gewenst verschil tussen diepte en waterniveau:  <br>
<input type="text" name="marge" value="<?php echo $marge;?>">
<br>
Gewenste bekleding: <br>
<input type="radio" name="bekleding" value="Geschilderd"> Geschilderd<br>
<input type="radio" name="bekleding" value="Betegeld"> Betegeld<br>

<input type="submit" name="submit" value="Vraag offerte aan">  
</form> 


 

</html>