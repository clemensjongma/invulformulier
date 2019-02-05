<html>
<style>
body {
  margin: 20px;
  padding-left: 500px;
  padding-top: 50px;
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
  color: blue;
  border-radius: 5px;
}

button:hover{
  color: green;
  border: 1px solid green;
  background: white;
}

input{
    background-color: lightblue;
    size: 30px;
    width: 100px;
    height: 50px;
    text-align: left;
    font-size: 20px;
    padding-left: 20px;
    margin: 5px;

 /* font-size: 20px;
 padding: 20 px;
 border-radius: 15px; */
}
h3{
    text-align: left;

}

#submit{
    background-color: darkgrey;
    width: 250px;
}
.radio{
    width: 20px;
    

}


</style>
<!-- <?php $lengte="";$breedte="";$diepte="";$rand="";$marge="";?> -->


<body>
<h3>Ontwerp uw zwembad</h3>
<img src= "alleszonderrand.png" alt ="zwembad" height = 360 px width = 500 px>
<form action="uitkomst.php" method="post">
<br>
Lengte: 
<input type="text" name="lengte" value="<?php echo $lengte;?>">m.  
<br>
Breedte: 
<input type="text" name="breedte" value="<?php echo $breedte;?>">m.
<br>
Diepte: 
<input type="text" name="diepte" value="<?php echo $diepte;?>">m.
<br>
<br>
<img src= "rand2.png" alt ="rand" height = 360px width = 500px>
<br>
<br>
Rand om zwembad: 
<input type="text" name="rand" value="<?php echo $rand;?>">m.
<br>
<br>
<br>
<img src= "alles.png" alt ="rand" height = 360px width = 500px>
<br>
<br>
Afstand tot waterniveau:  
<input type="text" name="marge" value="<?php echo $marge;?>">m.
<br>
<br>
Gewenste bekleding: 
<br>
<input class= radio type="radio" name="bekleding" value="Geschilderd"> Geschilderd
<input class= radio type="radio" name="bekleding" value="Betegeld"> Betegeld<br>


<input id=submit type="submit" name="submit" value="Vraag gegevens aan">  
</form> 


</body> 

</html>