
<!--va aller chercher le contenu header dans le fichier header.php-->	
	<?php include("includes/header.php");?>















<!-- TEXT & FEATURE -->
<h2 class="feature">Déroulé du combat</h2>

<!--START MENU ACCODION-->
<!-- FIRST STEP ACCORDION  -->
<div id="accordion">
	<div class="card">
		<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <p><button id="btnAccordion" class="btn btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Action 1 
		        </button> GANDALFA attaque SAMALA</p>
		      </h5>
		   
		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			 	<div class="row">
			 		<div class="col-sm-12">
						<h3>Coup porté: 25</h3>
				    </div>
					<div class="col-sm-6">
					  <h3>Héros:</h3>
						<table class="table table-bordered">
						  <thead>
						    <tr class="table-active">
						      <th scope="col">Nom</th>
						      <th scope="col">Type</th>
						      <th scope="col">Niveau</th>
						      <th scope="col">Vie</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">Gandalfa</th>
						      <td>Magicienne</td>
						      <td>2</td>
						      <td>100%</td>
						    </tr>
						    <tr>
						      <th scope="row">Gimla</th>
						      <td>Naine</td>
						      <td>1</td>
						      <td>100%</td>
						    </tr>
						    <tr>
						      <th scope="row">Legola</th>
						      <td>Elfe</td>
						      <td>1</td>
						      <td>100%</td>
						    
						    </tr>
						  </tbody>
						</table>
					</div>	
					<div class="col-sm-6">
				  		<h3>Monstres:</h3>
						<table class="table table-bordered">
						  <thead>
						    <tr class="table-active">
						      <th scope="col">Nom</th>
						      <th scope="col">Type</th>
						      <th scope="col">Niveau</th>
						      <th scope="col">Vie</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">Sarouma</th>
						      <td>Magicienne</td>
						      <td>1</td>
						      <td>50%</td>
						    </tr>
						    <tr>
						      <th scope="row">Saura</th>
						      <td>Big boss</td>
						      <td>1</td>
						      <td>100%</td>
						    </tr>
						    <tr>
						      <th scope="row">Roger Rabbit</th>
						      <td>Lapin</td>
						      <td>1</td>
						      <td>100%</td>
						    </tr>
						  </tbody>
						</table>
					</div>
			 	</div>
			</div>
		</div>
	</div>
	
<!-- SECOND STEP ACCORDION  -->	
  	<div class="card">
	    <div class="card-header" id="headingTwo">
	      <h5 class="mb-0">
	        <p><button id="btnAccordion" class="btn btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Action 2
	        </button> SAROUMA attaque GANDALFA</p>
	      </h5>
	    </div>
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
	    	<div class="row">
		 		<div class="col-sm-12">
					<h3>Coup porté: 25</h3>
			    </div>
				<div class="col-sm-6">
				  <h3>Héros:</h3>
					<table class="table table-bordered">
					  <thead>
					    <tr class="table-active">
					      <th scope="col">Nom</th>
					      <th scope="col">Type</th>
					      <th scope="col">Niveau</th>
					      <th scope="col">Vie</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Sarouma</th>
					      <td>Magicienne</td>
					      <td>2</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Saura</th>
					      <td>Naine</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Roger Rabbit</th>
					      <td>Elfe</td>
					      <td>1</td>
					      <td>100%</td>
					    
					    </tr>
					  </tbody>
					</table>
				</div>	
				<div class="col-sm-6">
			  		<h3>Monstres:</h3>
					<table class="table table-bordered">
					  <thead>
					    <tr class="table-active">
					      <th scope="col">Nom</th>
					      <th scope="col">Type</th>
					      <th scope="col">Niveau</th>
					      <th scope="col">Vie</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Gandalfa</th>
					      <td>Magicienne</td>
					      <td>1</td>
					      <td>50%</td>
					    </tr>
					    <tr>
					      <th scope="row">Gimla</th>
					      <td>Big boss</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Legola</th>
					      <td>Lapin</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					  </tbody>
					</table>
				</div>
		 	</div>
    	</div>
  	</div>
	 	
<!--THIRD STEP ACCORDION  -->	
	<div class="card">
		<div class="card-header" id="headingThree">
			<h5 class="mb-0">
			<p><button id="btnAccordion" class="btn btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Action 3</button> GANDALFA attaque SAROUMA</p>
			</h5>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			<div class="row">
		 		<div class="col-sm-12">
					<h3>Coup porté: 25</h3>
			    </div>
				<div class="col-sm-6">
				  <h3>Héros:</h3>
					<table class="table table-bordered">
					  <thead>
					    <tr class="table-active">
					      <th scope="col">Nom</th>
					      <th scope="col">Type</th>
					      <th scope="col">Niveau</th>
					      <th scope="col">Vie</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Gandalfa</th>
					      <td>Magicienne</td>
					      <td>2</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Gimla</th>
					      <td>Naine</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Legola</th>
					      <td>Elfe</td>
					      <td>1</td>
					      <td>100%</td>
					    
					    </tr>
					  </tbody>
					</table>
				</div>	
				<div class="col-sm-6">
			  		<h3>Monstres:</h3>
					<table class="table table-bordered">
					  <thead>
					    <tr class="table-active">
					      <th scope="col">Nom</th>
					      <th scope="col">Type</th>
					      <th scope="col">Niveau</th>
					      <th scope="col">Vie</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Sarouma</th>
					      <td>Magicienne</td>
					      <td>1</td>
					      <td>50%</td>
					    </tr>
					    <tr>
					      <th scope="row">Saura</th>
					      <td>Big boss</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					    <tr>
					      <th scope="row">Roger Rabbit</th>
					      <td>Lapin</td>
					      <td>1</td>
					      <td>100%</td>
					    </tr>
					  </tbody>
					</table>
				</div>
		 	</div>
    	</div>
	</div>  
</div>
<!--END MENU ACCORDION-->

<!-- TEXT & FEATURE -->
<h2 class="feature">Fin du combat</h2>

<!-- RESULT COMBAT START -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<input class="resultCombat form-control text-center" type="text" placeholder="VICTOIRE! l'ennemi est vaincu" readonly>
		</div>
	</div>		
</div>
<!--RESULT COMBAT END -->

<!-- START PARAGRAPH -->
<div class="container">
	<div class="row paragraph">
		<div class="col-sm-6">
			<p>Robur sedibus abierat resistere postquam conati porrecta casu nec abierat cohortium nec vicos opulentos relictum quae acciverunt digressi planitie porrecta et equestrium victu in et et relictum abierat omne sedibus sedibus opulentos retroque recreati propinquabant acciverunt cohortium acciverunt quiete conati quiete sunt quae adorti vicos timor planitie retroque victu retroque.</p>
		</div>	
		<div class="col-sm-6">
			<p>Robur sedibus abierat resistere postquam conati porrecta casu nec abierat cohortium nec vicos opulentos relictum quae acciverunt digressi planitie porrecta et equestrium victu in et et relictum abierat omne sedibus sedibus opulentos retroque recreati propinquabant acciverunt cohortium acciverunt quiete conati quiete sunt quae adorti vicos timor planitie retroque victu retroque.</p>
		</div>	
	</div>
</div>	
<!-- END PARAGRAPH -->
<!-- va chercher le contenu dans le fichier footer.php-->	
	<?php include("includes/footer.php");?>
