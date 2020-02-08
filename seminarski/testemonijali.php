<?php
include 'sesija.php';
include 'konekcija.php';
include 'model/testemonial.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="DataTables-1.10.4/media/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
<script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
	<title>Reseau</title>
	

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />

</head>

<body>
  <?php
      include 'header.php';
   ?>


	





	<div id="service" class="section md-padding">

		<div class="container">
      <div class="section-header text-center">
        <h2 class="title">Testemonials</h2>
				<h4 id="rez"></h4>
      </div>

			<form action="upload.php" method= "POST" enctype="multipart/form-data">
				<div class="col-md-12">
					<label for="ime">Ime</label>
					<input type="text" class="form-control" placeholder="Ime" id="ime" name="ime">
				</div>
				<div class="col-md-12">
					<label for="text">Tekst</label>
					<input type="text" class="form-control" placeholder="Text" id="text" name="text">
				</div>
				<div class="col-md-12">
					<label for="fileToUpload">Slika</label>
					<input type="file" class="form-control" placeholder="Unesite sliku" id="fileToUpload" name="fileToUpload">
				</div>
				<br>
				<div class="col-md-12">
					<label for="submit"></label>
					<input type="submit" class="form-control" value="Sacuvaj" id="submit" name="submit">
				</div>
			</form>

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
  <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  

	

     </script>
     <script>
     $(document).ready( function () {
		$('#tabelaTestemonials').DataTable();
		

        } );

     </script>


</body>

</html>
