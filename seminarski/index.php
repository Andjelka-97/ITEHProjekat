<?php
include 'sesija.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reseau</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php
      include 'header.php';
   ?>

	<div id="about" class="section md-padding">

		<div class="container">

			<div class="row">

				<div class="section-header text-center">
					<h2 class="title">Dobrodošli!</h2>
				</div>

				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Slušamo vas</h3>
						<p>Tu smo za vas!</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Stvaramo magiju</h3>
						<p>Mi stvaramo magiju za vas, vaša vizija ce postati realnost!</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Responzivnost</h3>
						<p>Responzivnost je naša tajna, nećete brinuti o mobilnom delu sajta!</p>
					</div>
				</div>

			</div>

		</div>

	</div>

	<div id="numbers" class="section sm-padding">

		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">75</span></h3>
						<span class="white-text">Srećnih klijenata</span>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">43</span></h3>
						<span class="white-text">Sajtova napravljeno</span>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">56000</span></h3>
						<span class="white-text">Šoljica kafe</span>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">124</span></h3>
						<span class="white-text">Projekata završeno</span>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div id="service" class="section md-padding">

		<div class="container">
      <div class="section-header text-center">
        <h2 class="title">ŠTA NUDIMO?</h2>
				<button class="btn btn-default" onclick="vratiSveUslugeSortirano('rastuce')">Sortiraj rastuće</button>
				<button class="btn btn-default" onclick="vratiSveUslugeSortirano('opadajuce')">Sortiraj opadajuće</button>
      </div>
			<div id="usluge" class="row">


			</div>

		</div>

	</div>

	<div id="testimonial" class="section md-padding">

		<div class="bg-img" style="background-image: url('./img/background3.jpg');">
			<div class="overlay"></div>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

					</div>
				</div>

			</div>

		</div>

	</div>


	<div id="contact" class="section md-padding">

		<div class="container">

			<div class="row">

				<div class="section-header text-center">
					<h2 class="title">Kontaktirajte nas:</h2>
				</div>

				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telefon</h3>
						<p>+381 65 234 5421</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>E-mail</h3>
						<p>podrska@reseau.com</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Adresa</h3>
						<p>Jove Ilića 154</p>
					</div>
				</div>
			</div>

			


		</div>

	</div>

	<?php
		include 'footer.php';
	?>

	<div id="back-to-top"></div>

	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

  <script>
      function vratiSveUsluge(){
          $.ajax({
            url: "controller/kontroler.php",
            data: {operacija:'usluge'},
            method: "GET",
            success: function(result){
							var nalepi = "";
							console.log(result);
							$.each(JSON.parse(result),function(i,obj){
								nalepi+='<div class="col-md-6 col-sm-6">';
								nalepi+='<div class="service">';
								nalepi+='<i class="fa fa-pencil"></i>';
								nalepi+='<h3>'+obj.nazivUsluge+'</h3>';
								nalepi+='<p>'+obj.opisUsluge+'</p>';
								nalepi+='<p>Cena: <b>'+obj.cena+' eura</b></p>';
								nalepi+='</div>';
								nalepi+='</div>';
							});

							$("#usluge").html(nalepi);
            }
          });

      }

      vratiSveUsluge();
   </script>

	 <script>
       function vratiSveUslugeSortirano(sort){
           $.ajax({
             url: "controller/kontroler.php",
             data: {operacija:'uslugeSort',sort:sort},
             method: "GET",
             success: function(result){
 							var nalepi = "";
 							console.log(result);
 							$.each(JSON.parse(result),function(i,obj){
 								nalepi+='<div class="col-md-6 col-sm-6">';
 								nalepi+='<div class="service">';
 								nalepi+='<i class="fa fa-pencil"></i>';
 								nalepi+='<h3>'+obj.nazivUsluge+'</h3>';
 								nalepi+='<p>'+obj.opisUsluge+'</p>';
 								nalepi+='<p>Cena: <b>'+obj.cena+' eura</b></p>';
 								nalepi+='</div>';
 								nalepi+='</div>';
 							});

 							$("#usluge").html(nalepi);
             }
           });

       }

    </script>
		<script>
	      function vratiSveTestemoniale(){
	          $.ajax({
	            url: "controller/kontroler.php",
	            data: {operacija:'testemonial'},
	            method: "GET",
	            success: function(result){
								var nalepi = "";
								console.log(result);
								$.each(JSON.parse(result),function(i,obj){
									nalepi+='<div class="testimonial">';
									nalepi+='<div class="testimonial-meta">';
									nalepi+='<img src="slike/'+obj.slika+'" alt="">';
									nalepi+='<h3 class="white-text">'+obj.ime+'</h3>';
									nalepi+='<span>Klijent</span>';
									nalepi+='</div>';
									nalepi+='<p class="white-text">'+obj.text+'</p>';
									nalepi+='</div>';
								});

								$("#testimonial-slider").html(nalepi);



									$('#testimonial-slider').owlCarousel({
										loop:true,
										margin:15,
										dots : true,
										nav: false,
										autoplay : true,
										responsive:{
											0: {
												items:1
											},
											992:{
												items:2
											}
										}
									});

	            }
	          });

	      }

	      vratiSveTestemoniale();
	   </script>
		 
		


	   
</body>

</html>
