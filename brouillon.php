



<?php include('head.inc.php') ; ?>



	<body class="body">

		<header>
					<nav style="background-image : url('profil_1.jpg')" class="navbar navbar-expand-md navbar-dark  fixed-top">
				  <span id="lien" style="color: white ; font-size: 75px" class="navbar-brand" ><strong>POP EAT</strong></span>

				  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#"> <span class="sr-only"></span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#"></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
				      </li>
				      
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <img style="width: 150px" src="satellite.png">
				    </form>
				  </div>
				</nav>

				<?php echo '<center><p class="txt_size">'.date('d / M / Y').'</p></center>'; ?>

			<div style=" box-shadow: 0 2px 50px 0 rgba(0 , 0 , 0 , 0.4) , 0 6px 8px 0 rgba(0,0,0,0.4) ;" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  			<ol class="carousel-indicators">
		    		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  			</ol>
		  		<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img src="img_1.jpeg" class="d-block w-100" alt="...">
		      	<div class="carousel-caption d-none d-md-block">
		        	<h3 class="txt_size" style="color: red">Petit Déjeuner</h3>
		        	<p class="txt_size">Prenez le temps de bien manger avant de commencer votre journee</p>
		      	</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="img_2.png" class="d-block w-100" alt="...">
		      	<div class="carousel-caption d-none d-md-block">
		        	<h3 class="txt_size" style="color: yellow">Diner en soiré romantique</h3>
		        	<p class="txt_size">Apporter de l'émotion dans la vie de vos proches autour de nos plats suculant</p>
		      	</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="img_3.png" class="d-block w-100" alt="...">
		      	<div class="carousel-caption d-none d-md-block">
		        	<h3 class="txt_size" style="color: yellow">Commande à distance</h3>
		        	<p class="txt_size">Commander directement ici , et l'on vous livrera dans les minutes</p>
		      	</div>
		   		 </div>
		  		</div>
		  			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    			<span class="sr-only">Previous</span>
		  			</a>
		  			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    		<span class="sr-only">Next</span>
		  			</a>
			</div>
		</header>

		<div class="div_space">


		</div>




			<div class="card border-success" style=" background-color: white">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP EAT</strong>" ' class="nav-link active article" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">PLATS</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP EAT</strong>" ' class="nav-link article" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-home" aria-selected="true">BOISSONS</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP EAT</strong>" ' class="nav-link article" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
				     aria-selected="false">PATISSERIE</a>
				  </li>
				  
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP EAT</strong>" ' class="nav-link article" id="pills-contact-3-tab" data-toggle="pill" href="#pills-contact-3" role="tab" aria-controls="pills-contact" aria-selected="false">GLACIER</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP EAT</strong>" ' class="nav-link article" id="pills-contact-4-tab" data-toggle="pill" href="#pills-contact-4" role="tab" aria-controls="pills-contact" aria-selected="false">VINS</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a type="text" onclick='document.getElementById("lien").innerHTML ="<strong>POP TUNE</strong>" ' class="nav-link article" id="pills-contact-5-tab" data-toggle="pill" href="#pills-contact-5" role="tab" aria-controls="pills-contact" aria-selected="false">POP TUNE</a>
				  </li>
				</ul>
			</div>

			<p></p>
			
			<div class="tab-content " id="pills-tabContent">
			
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  	

						<div class="card border-danger" style=" background-color: white">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							  
							  </li>
							  <li class="nav-item" role="presentation">
							    <a type="text"  class="nav-link active article" id="pills-contact-7-tab" data-toggle="pill" href="#pills-contact-7" role="tab" aria-controls="pills-contact" aria-selected="false">PLAT AFRICAIN</a>
							  </li>
							
							  <li class="nav-item" role="presentation">
							    <a type="text"  class="nav-link article" id="pills-contact-8-tab" data-toggle="pill" href="#pills-contact-8" role="tab" aria-controls="pills-contact" aria-selected="false">PLAT CHINOIS</a>
							  </li>

							  <li class="nav-item" role="presentation">
							    <a type="text" class="nav-link article" id="pills-contact-9-tab" data-toggle="pill" href="#pills-contact-9" role="tab" aria-controls="pills-contact" aria-selected="false">PLAT IVOIRIEN</a>
							  </li>

							</ul>
						</div>

						<div class="tab-content" id="pills-tabContent">

						<div class="tab-pane fade show active" id="pills-contact-7" role="tabpanel" aria-labelledby="pills-contact-7-tab">

							<div class="album py-5 text-center">
              					<div class="container">
                   					<div class="col" >
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                   					</div>
              					</div>
              				</div>

              			</div>

              			<div class="tab-pane fade show " id="pills-contact-8" role="tabpanel" aria-labelledby="pills-contact-8-tab">

							<div class="album py-5 text-center">
              					<div class="container">
                   					<div class="col" >
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					
                   					</div>
              					</div>
              				</div>

              			</div>

              			<div class="tab-pane fade show " id="pills-contact-9" role="tabpanel" aria-labelledby="pills-contact-9-tab">

							<div class="album py-5 text-center">
              					<div class="container">
                   					<div class="col" >
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					<?php include('card.eat.inc.php') ; ?>
                    					
                   					</div>
              					</div>
              				</div>

              			</div>

						</div>

				</div>





		    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
		  	

		  				<div class="album py-5 text-center">
							<div class="container">
			     				 <div class="col" >
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 </div>
						  </div>
			  			</div>


		    </div>





		    <div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		  				

		    			<div class="album py-5 text-center">
							<div class="container">
			     				 <div class="col" >
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 </div> 
						  </div>
			  			</div>


		    </div>







		    <div class="tab-pane fade " id="pills-contact-3" role="tabpanel" aria-labelledby="pills-contact-3-tab">
		  				

		    			<div class="album py-5 text-center">
							<div class="container">
			     				 <div class="col" >
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 </div> 
						  </div>
			  			</div>


		    </div>





		    <div class="tab-pane fade " id="pills-contact-4" role="tabpanel" aria-labelledby="pills-contact-4-tab">
		  				

		    			<div class="album py-5 text-center">
							<div class="container">
			     				 <div class="col" >
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 	<?php include('card.eat.inc.php') ; ?>
			     				 </div> 
						  </div>
			  			</div>


		    </div>






		    <div class="tab-pane fade " id="pills-contact-5" role="tabpanel" aria-labelledby="pills-contact-5-tab">

		    	
		  				

		    			<div class="album py-5 text-center">
							<div class="">
			     				 <div class="row" >
			     				 	<?php include('card.inc.php') ; ?>
			     				 </div> 
						  </div>
			  			</div>


		    </div>

		    </div>




<?php include('foot.inc.php') ; ?>



echo'<center><div style="font-size:80px ; margin-bottom : 85px"><strong>FACTURE</strong></div></center>' ;

							echo'<div style="font-size:65px ; margin-bottom : 65px"><strong>RESTAURANT BONJOUR</strong></div>';

							echo'<div style="font-size:45px ; margin-bottom : 65px">'.date('d / M / Y').' <h style="position : absolute ; right : 15px">Burkina Faso</h></div>';

							echo'<div style="font-size:45px ; margin-bottom : 185px">'.date('h:m:s').' <h style="position : absolute ; right : 15px">Ouagadougou</h></div>';

							echo'<div style="font-size:45px ; margin-bottom : 85px">FAC19#311 <h style="position : absolute ; right : 250px">10</h></div>';

							echo'<center><div style="font-size:50px ">-------------------</div></center>';
