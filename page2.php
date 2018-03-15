
<!--va aller chercher le contenu header dans le fichier header.php-->	
	<?php include("includes/header.php");?>















<!--START MENU ACCODION-->
<div id="accordion">
  <div class="card col-sm-12">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
      	
        <button id="btn1" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Action 1<span>GLOUPS attaque SAMALA</span>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body col-sm-5">
		<table class="table table-bordered">
		  <thead>
		  	<p>Coup porté:</p>
		  	<span>Héros:</span>
		    <tr class="table-active">
		      <th scope="col">Nom</th>
		      <th scope="col">Type</th>
		      <th scope="col">Niveau</th>
		      <th scope="col">Vie</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Magicienne</td>
		      <td>2</td>
		      <td>100%</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Naine</td>
		      <td>1</td>
		      <td>100%</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Elfe</td>
		      <td>1</td>
		      <td>100%</td>
		    
		    </tr>
		  </tbody>
		</table>
	  </div>	
	  <div class="card-body col-sm-5">	
		<table class="table table-bordered">
		  <thead>
		  	<h5>Monstres:</h5>
		    <tr class="table-active">
		      <th scope="col">Nom</th>
		      <th scope="col">Type</th>
		      <th scope="col">Niveau</th>
		      <th scope="col">Vie</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Magicienne</td>
		      <td>1</td>
		      <td>50%</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Big boss</td>
		      <td>1</td>
		      <td>100%</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Lapin</td>
		      <td>1</td>
		      <td>100%</td>
		    
		    </tr>
		  </tbody>
		</table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button id="btn2" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span>Action 2</span>SAROUMA attaque GANDALFA
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button id="btn3" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <span>Action 3</span>GANDALFA attaque SAROUMA
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>	
<!--END MENU ACCORDION-->
<!-- va chercher le contenu dans le fichier footer.php-->	
	<?php include("includes/footer.php");?>
