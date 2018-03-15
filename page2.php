
<!--va aller chercher le contenu header dans le fichier header.php-->	
	<?php include("includes/header.php");?>















<!--START MENU ACCODION-->
<h2>Déroulé du combat</h2>
<!-- FIRST STEP ACCORDION  -->
<div id="accordion">
    <div class="container">
	  <div class="card">
	    <div class="card-header" id="headingOne">
			<div class="row">
		      <h5 class="mb-0">
		      	
		        <button id="btn1" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          <span>Action 1</span>GANDALFA attaque SAMALA
		        </button>
		      </h5>
		    </div>

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
	</div>
<!-- SECOND STEP ACCORDION  -->	
	<div class="container">
	  	<div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button id="btn2" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          <span>Action 2</span>SAROUMA attaque GANDALFA
		        </button>
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
	</div>  
	
<!--THIRD STEP ACCORDION  -->
	<div class="container">
		<div class="card">
			<div class="card-header" id="headingThree">
				<h5 class="mb-0">
				<button id="btn3" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  <span>Action 3</span>GANDALFA attaque SAROUMA
				</button>
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
</div>
<!--END MENU ACCORDION-->
<h2>Fin du combat</h2>
<!-- va chercher le contenu dans le fichier footer.php-->	
	<?php include("includes/footer.php");?>
