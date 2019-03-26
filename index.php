<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  margin: 20px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2ff;
  padding: 20px;
  margin: 20px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<!-- <?php $lengte="";$breedte="";$diepte="";$rand="";$marge="";$bekleding=""?> -->


<body>
<div class="container">
    <h3>De zwembadconfigurator</h3><br>
    <p>Met deze tool kunt u berekenen hoeveel materiaal u nodig heeft voor het maken van een zwembad.</p>

    <img src= "alleszonderrand.png" alt ="zwembad" height = 360 px width = 500 px>
    
        
</div>

<div class="container">      
    <p>Beantwoord u a.u.b. de volgende vragen:</p>


  <form action="uitkomst.php" method="post">
    <div class="row">
          <div class="col-25">
            <label for="lng">Hoe lang wordt uw zwembad?</label>
          </div>
          <div class="col-75">
            <input type="text" id="lng" name="lengte" placeholder="lengte in meters..">
          </div>
        </div>  


    <div class="row">
          <div class="col-25">
            <label for="brd">Hoe breed wordt uw zwembad?</label>
          </div>
          <div class="col-75">
            <input type="text" id="brd" name="breedte" placeholder="breedte in meters..">
          </div>
        </div>


    <div class="row">
          <div class="col-25">
            <label for="dp">Hoe diep wordt uw zwembad?</label>
          </div>
          <div class="col-75">
            <input type="text" id="dp" name="diepte" placeholder="diepte in meters..">
          </div>
        </div>
        

    <div class="row">
          <div class="col-25">
            <label for="rnd">Hoe groot wordt de rand om het zwembad?</label>
          </div>
          <div class="col-75">
            <input type="text" id="rnd" name="rand" placeholder="rand in meters..">
          </div>
        </div>
    
    <div class="row">
          <div class="col-25">
            <label for="mrg">Wat wordt de afstand tot het waterniveau?</label>
          </div>
          <div class="col-75">
            <input type="text" id="mrg" name="marge" placeholder="in meters..">
          </div>
        </div>
    
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