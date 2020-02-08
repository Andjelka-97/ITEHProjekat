<header id="home">
  <div class="bg-img" style="background-image: url('./img/background1.jpg');">
    <div class="overlay"></div>
  </div>

  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <div class="navbar-brand">
          <a href="index.php">
            <img class="logo" src="img/logo.png" alt="logo">
          </a>
        </div>
        <div class="nav-collapse">
          <span></span>
        </div>
      </div>

      <ul class="main-nav nav navbar-nav navbar-right">
      
        <li><a href="index.php">Pocetna</a></li>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user']->ulogovan){
                if($_SESSION['user']->isAdmin ){
                  ?>
                  <li><a href="administracija.php">Administracija</a></li>
                  <?php
                }else{

                  ?>
                  <li><a href="testemonijali.php">Testemonijali</a></li>
                  <?php
                }
               
               
                

                ?>
                	
              
                <li><a href="vizuelizacija.php">Grafički prikaz podataka</a></li>
                <li><a href="logout.php">LogOut</a></li>
                <?php
            }else{
              ?>
              	
              
              <li><a href="registracija.php">Registracija</a></li>
              <li><a href="login.php">LogIn</a></li>
              <?php
            }

        ?>

      </ul>
      <ul class="main-nav nav navbar-nav navbar-left">
      <?php
		$url="http://api.worldweatheronline.com/premium/v1/weather.ashx?key=3df5e2444fd846a1ba1164223200802&q=Belgrade,Serbia&num_of_days=2&tp=3&format=json";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_POST,false);
		$curl_odgovor=curl_exec($curl);
		curl_close($curl);
		$parsiran_json=json_decode($curl_odgovor);
		$temperatura=$parsiran_json->data->current_condition[0]->temp_C;
		?>
    <p>Trenutna temperatura u Beogradu je <?php echo $temperatura;?> *C.</p>
    </ul>
    </div>
  </nav>

  <div class="home-wrapper">
    <div class="container">
      <div class="row">

        <div class="col-md-10 col-md-offset-1">
          <div class="home-content">
            <h1 class="white-text">Mi smo Réseau!</h1>
            <p class="white-text">We are what you want.
            </p>

          </div>
        </div>

      </div>
    </div>
  </div>

</header>
