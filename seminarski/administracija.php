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
        <h2 class="title">Usluge</h2>
				<h4 id="rez"></h4>
      </div>
			<div id="usluge" class="row">


			</div>

		</div>

	</div>

	<div id="service" class="section md-padding">

		<div class="container">
      <div class="section-header text-center">
        <h2 class="title">Dodaj novu uslugu</h2>
      </div>
			<form method="post" action="controller/kontroler.php">
				<input type="hidden" id="id" name="id" value="" class="form-control">
				<input type="hidden" id="operacija" name="operacija" value="sacuvaj" class="form-control">
				<label for="naziv">Naziv</label>
				<input type="text" id="naziv" name="naziv" placeholder="Naziv usluge" class="form-control">
				<label for="opis">Opis</label>
				<input type="text" id="opis" name="opis" placeholder="Opis usluge" class="form-control">
				<label for="cena">Cena</label>
				<input type="number" id="cena" name="cena" placeholder="Cena usluge" class="form-control">
				<br>
				<label for="usluga"></label>
				<input type="submit" id="usluga" name="usluga" value="Sacuvaj" class="btn btn-primary">
			</form>

		</div>

	</div>

	<div id="service" class="section md-padding">

		<div class="container">
      <div class="section-header text-center">
        <h2 class="title">Testemonials</h2>
				<h4 id="rez"></h4>
      </div>
	  		
			<table id="tabelaTestemonials" class="table-responsive">
				<thead>
					<tr>
						<th>Ime</th>
						<th>Text</th>
						<th>Slika</th>
					</tr>
					
					
				</thead>
				<tbody>
			
				<?php
						//	$podaci = Testemonial::getAll($konekcija);
              $curl = curl_init("http://localhost/ana/gotov/api/testemoniali");
        			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        			$jsonOdgovor = curl_exec($curl);
			  $podaci = json_decode($jsonOdgovor);
			  curl_close($curl);
							foreach ($podaci as $p ) {

								?>
								<tr>
								
									<td><?php echo $p->ime ?></td>
									<td><?php echo $p->text ?></td>
									<td><img src="slike/<?php echo $p->slika ?>" class="img img-responsive" alt=""></td>
								</tr>

								<?php
							}
					 ?>
				</tbody>
			</table>

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

  <script>
      function vratiSveUsluge(){
          $.ajax({
            url: "controller/kontroler.php",
            data: {operacija:'usluge'},
            method: "GET",
            success: function(result){
							var nalepi = "";
							nalepi+='<table class="table table-hover">';
							nalepi+='<thead>';
							nalepi+='<tr>';
							nalepi+='<th>Usluga ID</th>';
							nalepi+='<th>Naziv</th>';
							nalepi+='<th>Opis</th>';
							nalepi+='<th>Cena</th>';
							nalepi+='<th>Izmeni</th>';
							nalepi+='<th>Obrisi</th>';
							nalepi+='</tr>';
							nalepi+='</thead>';
							nalepi+='<tbody';
							$.each(JSON.parse(result),function(i,obj){

								nalepi+='<tr>';
								nalepi+='<td>'+obj.uslugaID+'</td>';
								nalepi+='<td>'+obj.nazivUsluge+'</td>';
								nalepi+='<td>'+obj.opisUsluge+'</td>';
								nalepi+='<td>'+obj.cena+' eura</td>';
								nalepi+='<td><button class="btn btn-info" onclick="izmeni('+obj.uslugaID+')">Izmeni</button></td>';
								nalepi+='<td><button class="btn btn-danger" onclick="obrisi('+obj.uslugaID+')">Obrisi</button></td>';
								nalepi+='</tr>';
							});

							nalepi+='</tbody';
							nalepi+='</table';

							$("#usluge").html(nalepi);
            }
          });

      }

      vratiSveUsluge();
   </script>

	 <script>
       function izmeni(id){
           $.ajax({
             url: "controller/kontroler.php",
             data: {operacija:'uslugeJedna',id:id},
             method: "GET",
             success: function(result){
 							var obj=JSON.parse(result);
							$("#naziv").val(obj.nazivUsluge);
							$("#opis").val(obj.opisUsluge);
							$("#cena").val(obj.cena);
							$("#id").val(obj.uslugaID);
							$("#operacija").val("izmena");
             }
           });

       }

    </script>
		<script>
        function obrisi(id){
            $.ajax({
              url: "controller/kontroler.php",
              data: {operacija:'uslugeObrisi',id:id},
              method: "GET",
              success: function(result){
	 							$("#rez").html(result);
								vratiSveUsluge();
              }
            });

        }

     </script>
     <script>
     $(document).ready( function () {
		$('#tabelaTestemonials').DataTable();
		

        } );

     </script>


</body>

</html>
