<?php include '../includes/dbconfig.php'?>
	
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="../common-css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="../common-css/ionicons.css" rel="stylesheet">

	<link href="../common-css/layerslider.css" rel="stylesheet">


	<link href="../01-homepage/css/styles.css" rel="stylesheet">

	<link href="../01-homepage/css/responsive.css" rel="stylesheet">

</head>
<body>
	<!--header-->
	<?php include '../includes/header.php' ?>
	
	<!--slider-->
	<div class="main-slider">
		<div id="slider">

			<div class="ls-slide">
				<img src="../images/pexel/pexels-ella-olsson-1640773b.jpg" class="ls-bg" alt="" />

					<div class="slider-content ls-l" style="top:60%; left:40%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
						<a class="btn" href="#">Votre</a>
						<h1 class="title">
							<b><span
							class="txt-rotate"
							data-period="500"
							data-rotate='["bien-être", "Santé", "Sommeil", "Humeur", "Perte de poids" ]'></span></b>
						</h1>
						<h6 class="para">dépend de votre alimentation.<h6>
					</div>

			</div>

		</div><!-- slider -->
	</div><!-- main-slider -->


	<section class="section blog-area">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						<div class="single-post">
							<div class="image-wrapper"><img src="../images/pexel/nutriton.jpg" alt="Blog Image"></div>

							<div class="icons">
								<div class="left-area">
									<a class="btn caegory-btn" href="#"><b>Nutrition</b></a>
								</div>
								<ul class="right-area social-icons">
									<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
									<li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
									<li><a href="#"><i class="ion-android-textsms"></i></a></li>
								</ul>
							</div>
							<p class="date"><em>Monday, October 13, 2017</em></p>
							<h3 class="title"><a href="#"><b class="light-color">Ceci est un test</b></a></h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto.</p>
							<a class="btn read-more-btn" href="#"><b>La suite...</b></a>
						</div><!-- single-post -->

						<div class="single-post">
							<div class="image-wrapper"><img src="../images/pexel/vitamin.jpg" alt="Blog Image"></div>

							<div class="icons">
								<div class="left-area">
									<a class="btn caegory-btn" href="#"><b>SANTÉ</b></a>
								</div>
								<ul class="right-area social-icons">
									<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
									<li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
									<li><a href="#"><i class="ion-android-textsms"></i></a></li>
								</ul>
							</div>
							<h6 class="date"><em>Monday, October 13, 2017</em></h6>
							<h3 class="title"><a href="#"><b class="light-color">Ceci est un test</b></a></h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								 consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
								dolore magnam aliquam quaerat voluptatem.</p>
							<a class="btn read-more-btn" href="#"><b>La suite...</b></a>
						</div><!-- single-post -->

						<div class="row">

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="../images/pexel/brownie500x400.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>dessert</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
											<li><a href="#"><i class="ion-android-textsms"></i></a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">One more night in the local clubs</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>La suite...</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="../images/pexel/spaghettib.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>Déjeuner/Diner</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
											<li><a href="#"><i class="ion-android-textsms"></i></a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">Test</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>La suite...</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-12 col-md-12">
								<div class="single-post post-style-2">
									<div class="image-wrapper width-50 left-area">
										<img src="../images/pexel/entre1.jpg" height="500px" width="400px" alt="Blog Image"></div>

									<div class="post-details width-50 right-area">

										<div class="icons">
											<div class="left-area">
												<a class="btn caegory-btn" href="#"><b>Déjeuner/Diner</b></a>
											</div>
											<ul class="right-area social-icons">
												<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
												<li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
												<li><a href="#"><i class="ion-android-textsms"></i></a></li>
											</ul>
										</div>
										<h6 class="date"><em>Monday, October 13, 2017</em></h6>
										<h3 class="title"><a href="#"><b class="light-color">Ceci est un test</b></a></h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
											 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
											dolore magnam aliquam quaerat voluptatem.</p>
										<a class="btn read-more-btn" href="#"><b>La suite...</b></a>
									</div><!-- post-details -->

								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

						</div><!-- row -->

						<a class="btn load-more-btn" target="_blank" href="#">Plus de posts</a>

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->


				<div class="col-lg-4 col-md-12">
					<div class="sidebar-area">

						<div class="sidebar-section about-author center-text">
							<div class="author-image"><img src="../images/profil.jpg" alt="Image de profil"></div>

							<ul class="social-icons">
								<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							</ul><!-- right-area -->

							<h4 class="author-name"><b class="light-color">Aicha Souad</b></h4>
							<p>Professionnelle de santé dans la nutrition et la bonne hygiène de vie, je saurai vous aider à atteindre vos objectifs !</p>

							<a class="read-more-link" href="#"><b>La suite...</b></a>

						</div><!-- sidebar-section about-author -->

						<div class="sidebar-section src-area">

							<form action="post">
								<input class="src-input" type="text" placeholder="Search">
								<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
							</form>

						</div><!-- sidebar-section src-area -->

						
						<div class="sidebar-section category-area">
							<h4 class="title"><b class="light-color">RECETTES MINCEUR</b></h4>
							<a class="category" href="#">
								<img src="../images/pexel/recettesMinceur/entree.jpg" alt="Category Image">
								<h6 class="name">ENTRÉE</h6>
							</a>

							<a class="category" href="#">
								<img src="../images/pexel/recettesMinceur/plat.jpg" alt="Category Image">
								<h6 class="name">PLATS</h6>
							</a>

							<a class="category" href="#">
								<img src="../images/pexel/recettesMinceur/dessert.jpg" alt="Category Image">
								<h6 class="name">DESSERTS</h6>
							</a>
							<a class="category" href="#">
								<img src="../images/pexel/recettesMinceur/pain.jpg" alt="Category Image">
								<h6 class="name">PAIN & VIENNOISERIE</h6>
							</a>
						</div><!-- sidebar-section category-area -->

						<div class="sidebar-section latest-post-area">
							<h4 class="title"><b class="light-color">Derniers Posts</b></h4>

							<div class="latest-post" href="#">
								<div class="l-post-image"><img src="../images/pexel/mangerGras.jpg" alt="Category Image"></div>
								<div class="post-info">
									<a class="btn category-btn" href="#">SANTÉ</a>
									<h5><a href="#"><b class="light-color">Manger du gras pour perdre du gras</b></a></h5>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
								</div>
							</div>

							<div class="latest-post" href="#">
								<div class="l-post-image"><img src="../images/pexel/meditation.jpg" alt="Category Image"></div>
								<div class="post-info">
									<a class="btn category-btn" href="#">BIEN-ÊTRE</a>
									<h5><a href="#"><b class="light-color">L'mportance de la meditation pour la perte de poids</b></a></h5>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
								</div>
							</div>
							<div class="latest-post" href="#">
								<div class="l-post-image"><img src="../images/pexel/A-toi-de-choisir.jpg" alt="Category Image"></div>
								<div class="post-info">
									<a class="btn category-btn" href="#">SANTÉ</a>
									<h5><a href="#"><b class="light-color">A toi de choisir ton chemin</b></a></h5>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
								</div>
							</div>

							<div class="latest-post" href="#">
								<div class="l-post-image"><img src="../images/recent-post-4-150x200.jpg" alt="Category Image"></div>
								<div class="post-info">
									<a class="btn category-btn" href="#">BIEN-ÊTRE</a>
									<h5><a href="#"><b class="light-color">J’ai décidé d’être heureux car c’est bon pour la santé.</b></a></h5>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
								</div>
							</div>

						</div><!-- sidebar-section latest-post-area -->

						
						<div class="sidebar-section tags-area">
							<h4 class="title"><b class="light-color">Tags</b></h4>
							<ul class="tags">
								<li><a class="btn" href="#">santé</a></li>
								<li><a class="btn" href="#">nutrition</a></li>
								<li><a class="btn" href="#">bien-être</a></li>
								<li><a class="btn" href="#">perte de poids</a></li>
								<li><a class="btn" href="#">healthy</a></li>
								<li><a class="btn" href="#">recettes minceur</a></li>
								<li><a class="btn" href="#">sport</a></li>
							</ul>
						</div><!-- sidebar-section tags-area -->

						<div class="sidebar-section newsletter-area">
							<h5 class="title"><b>Inscris-toi à la newsletter pour rester connecté</b></h5>
							<form action="post">
								<input class="email-input" type="text" placeholder="Entres ton adresse mail">
								<button class="btn btn-2" type="submit">S'inscrire</button>
							</form>
						</div><!-- sidebar-section newsletter-area -->


					</div><!-- about-author -->
				</div><!-- col-lg-4 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->


	


	<footer>
		<?php include '../includes/footer.php' ?>
	</footer>


	<!-- SCIPTS -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<script src="../common-js/jquery-3.1.1.min.js"></script>

	<script src="../common-js/tether.min.js"></script>

	<script src="../common-js/bootstrap.js"></script>

	<script src="../common-js/layerslider.js"></script>

	<script src="../common-js/scripts.js"></script>

</body>
</html>