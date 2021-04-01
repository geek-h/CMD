




<?php include('head.inc.php') ; ?>



	<body class="body">

		<header style="background-color: white">
					<nav style="background-image : url('profil_1.jpg')" class="navbar navbar-expand-md navbar-dark  fixed-top">
				  <span style="color: white ; font-size: 75px" class="navbar-brand" ><strong>POP TUNE</strong></span>

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
				      <img style="width: 130px" src="lo.png">
				    </form>
				  </div>
				</nav>

		


				<?php 

					$titre_vid = $_POST['lire'] ;

					echo '<div  style="margin-top : 140px ; background-color : black ; position : fixed ; top : 0px" class=" embed-responsive embed-responsive-16by9 navbar navbar-expand-md navbar-dark  fixed-top">
        			<video autoplay controls src="POP_TUNES/Pub.mp4" ></video>

    			</div>';


    echo '</header>';


    			echo'<div style="margin-top : 800px" class="album py-5 text-center">
							<div class="">
			     				 <div class="row" >';



							     				 		// Parametrage par ici
										$fch_nt = fopen("POP_TUNES/videos.txt" , "r") ;	
										$nbr = 3 ; // nombre de fichier											
										$chr = 300 ; // caractere maxi du nom du fichier le plus long
										$style = ' style="border-radius: 25px" class="text jumbotron" ' ; // style d'affiche de chaque fichier
										$ext = '.mp4' ; // extension du ou des fichiers a inserer exemple --> (.pdf / .docs / .mp3 / .exe / etc...)
										$Xchemin = "POP_TUNES/" ;// chemin du dossier ou se trouve le fichier Titre.txt
										$nom = "VID" ;// le nom commun que vous avez attribuez a vos fichier
										$mes = '<button type="submit" class="btn btn-lg btn-block btn-primary article">VISIONNER</button>' ;// l'action a effectuer sur le fichier ex : (Telecharger , Ouvrire , Entrer ) * facultatif

									// Parametrage

										$numb = 1 ;
									 
									 

									while ( $numb<= $nbr) {                       
										
									echo '<div class="col-md-8">
										 	<div style="margin-left :25px">
											 	<div class="card mb-4 shadow-sm">
													<div class="card-header " style=" box-shadow: 0 2px 50px 0 rgba(0 , 0 , 0 , 0.4) , 0 6px 8px 0 rgba(0,0,0,0.4) ;">
													<h4 class="my-0 font-weight-normal article">'.fgets($fch_nt , $chr).'</h4>
													</div>
												<div class="card-body bg-light">
												<h1 class="card-title pricing-card-title">000.000 Fr</h1>
												<ul class="list-unstyled mt-3 mb-4 list">
														<li><img style="width: 580px" src="POP_TUNES/'.$nom.' '.$numb.'.png"></li>
												</ul>
												<form action="actual.inc.php" method="POST">
													<input type="hidden"  value="'.$nom.' '.$numb.''.$ext.'" name="lire" class="form-control">
													<a href="actual.inc.php">'.$mes.'</a>
												</form>			
												</div>
											</div>
										</div>
									</div> 


									<div class="card border-primary mb-3" style="max-width: 18rem;">
				  						<div class="card-header article">POP</div>
				  						<div class="card-body text-primary">
				    					<h5 class="card-title article">14/05/2020</h5>
				    					<p class="card-text list">Some quick example text to build on the card title and make up the bulk of the card content.</p>
				  						</div>
									</div>



									' ;
										$numb = $numb + 1 ;

								 }




			     				echo' </div> 
						  </div>
			  			</div>'

				?>


	<?php include('foot.inc.php') ; ?>