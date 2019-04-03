<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link id="pagestyle" rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<!-- <?php $lengte="";$breedte="";$diepte="";$rand="";$marge="";$bekleding=""?> -->
</head>

<body>
<div class="container">
    <h3>De zwembadconfigurator</h3><br>
    <img src= "alleszonderrand.png" alt ="zwembad" height = 360 px width = 500 px>
    
    <p>Met de zwembadconfigurator kunt u berekenen hoeveel materiaal u nodig heeft voor het maken van een zwembad.</p>

    
    
        
</div>
<br>
<div class="container">      
    <p>Beantwoord a.u.b. de volgende vragen:</p>


  <form action="uitkomst.php" method="post">
    <div class="row">
          <div class="col-75">
            <label for="lng">Hoe lang wordt uw zwembad?</label>
          </div>
          <div class="col-25">
            <input type="text" id="lng" name="lengte" placeholder="lengte in meters..">
          </div>
    </div>  


    <div class="row">
          <div class="col-75">
            <label for="brd">Hoe breed wordt uw zwembad?</label>
          </div>
          <div class="col-25">
            <input type="text" id="brd" name="breedte" placeholder="breedte in meters..">
          </div>
    </div>


    <div class="row">
          <div class="col-75">
            <label for="dp">Hoe diep wordt uw zwembad?</label>
          </div>
          <div class="col-25">
            <input type="text" id="dp" name="diepte" placeholder="diepte in meters..">
          </div>
    </div>
        

    <div class="row">
          <div class="col-75">
            <label for="rnd">Hoe groot wordt de rand om het zwembad?</label>
          </div>
          <div class="col-25">
            <input type="text" id="rnd" name="rand" placeholder="rand in meters..">
          </div>
    </div>
    
    <!-- <div class="row"> -->
          <div class="col-75">
            <label for="mrg">Wat wordt de afstand van de bovenkant tot het waterniveau?</label>
          </div>
          <div class="col-25">
            <input type="text" id="mrg" name="marge" placeholder="afstand in meters..">
          </div>
    <!-- </div> -->
        

<br>
   
    <div class="row">
          
            <label for="bkl">Kies hier de gewenste bekleding van het zwembad:</label>
            <br>
          
            <input type="radio" id="bkl" name="bekleding" value="Geschilderd"> Geschilderd
            <input type="radio" id="bkl" name="bekleding" value="Betegeld"> Betegeld
            
        
    </div>


  <input id=submit type="submit" name="submit" value="Vraag gegevens aan">

  </form> 
  </div>

</body> 

</html>