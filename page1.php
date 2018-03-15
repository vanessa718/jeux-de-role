<?php
	include('includes/menu.php');
	include('includes/header.php');
	include ('includes/footer.php');
?>
<<<<<<< HEAD
<h3>Héroïnes</h3>
	<br>
<div class="container">	
	<div class="card" style="width: 15rem;">
  		<img class="card-img-top" src="css/img/Elfe.jpg" alt="Card image cap">
=======
<h3>Héroines</h3>
<div class="container card-hero">	
	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-elfe" src="css/img/Elfe2.jpg" alt="Card image cap">
>>>>>>> 308f084099b3ba9e93715db98e879341c2be0407
  		<div class="card-body">
    		<h4 class="card-title">Elfe</h4>
    	</div>
  	</div>

	<div class="card" style="width: 8rem;">
		<img class="card-img-top-guerriere" src="css/img/Guerriere2.png" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Guerrière</h4>
    	</div>	
  	</div>
		
	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-magic" src="css/img/Magicienne2.png" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Magicienne</h4>
    	</div>	
  	</div>

	<div class="card" style="width: 8rem;">
		<img class="card-img-top-naine" src="css/img/Naine2.png" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Naine</h4>
  		</div>
	</div>	
</div>

<h3>Monstres</h3>
<div class="container card-monster">	
	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-mage" src="css/img/MageNoir2.png" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Mage Noir</h4>
  		</div>
	</div>	

	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-orque" src="css/img/orque2.jpg" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Orque</h4>
  		</div>
	</div>	
	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-gobelin" src="css/img/gobelin2.jpg" alt="Card image cap">
  		<div class="card-body">
  			<h4 class="card-title">Gobelin</h4>
  		</div>
	</div>	

	<div class="card" style="width: 8rem;">
  		<img class="card-img-top-ombre" src="css/img/ombrenoire2.jpg" alt="Card image cap">
  		<div class="card-body">
    		<h4 class="card-title">Ombre noire</h4>
  		</div>
	</div>	
</div>

<h3>Créez vos équipes</h3>
<form>
	<h5>Personnage 1</h5>
		<label for="Nom">Nom * :</label>
		<input type="name" id="booklet" name="name" placeholder="" required>
		<label for="Type">Type * :</label>
		<input type="type" name="type" placeholder="" required>
	<h5>Personnage 2</h5>	
		<label for="Nom">Nom * :</label>
		<input type="name" id="name" name="name" placeholder="" required>
		<label for="Type">Type * :</label>
		<input type="type" name="type" placeholder="" required>
</form>
