<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrace</title>
	<link rel="stylesheet" href="velkavalka.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="icon" href ="icon.png" type="image/x-icon">
</head>
<body>

<header class="hlava">
<!-- Menu pro mobil -->
<div class="kolaps">
			<div class="mobilmenu"> 
				<div class="menuicon"></div>
				<div class="menuicon"></div>
				<div class="menuicon"></div>
			</div>		
	</div>	
	<div class="kolapsmenu">
		<div class="row">
			<div class="col-md-12 kolapsnabid">
				<a href="historie.html">Historie</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 kolapsnabid">
				<a href="jmennyseznam.php">Jmenný seznam</a>
			</div>
		</div>

		<div class="row">
			<div class="kolaps">
				<div class="col-md-12 kolapsnabid">
					<a href="komunitniseznam.php">Komunitní Seznam</a>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-12 kolapsnabid">
				<a href="prihlaseni.html">Přihlášení</a>
			</div>
		</div>
	</div>
	
	<script>
	var coll = document.getElementsByClassName("kolaps");
	var i;

	for (i = 0; i < coll.length; i++) {
  	  coll[i].addEventListener("click", function() {
  	 	this.classList.toggle("active");
    	var kolapsmenu = this.nextElementSibling;
    	if (kolapsmenu.style.maxHeight){
      	  kolapsmenu.style.maxHeight = null;
   	 	} else {
     	  kolapsmenu.style.maxHeight = kolapsmenu.scrollHeight + "px";
   		}
 	  });
	}
	</script>

	<!-- Ikona -->
	<div class="container">
		<div class="mobilicon">
			<a href="index.html">	
				<img src="icon.png">
			</a>
		</div>
	

	<!-- Header pro PC -->
	<div class="menu">
			<ul id="headerseznam">
				<li>
					<a href="historie.html">Historie</a>
				</li>
				<li>
					<a href="jmennyseznam.php">Jmenný seznam</a>
				</li>
				<li class="drpdwn">
					<a href="komunitniseznam.php">Komunitní Seznam</a>
				</li>
				<li class="prihlaseni">
					<a href="prihlaseni.html">Přihlášení</a>
				</li>
			</ul>
		</div>
	</div>		
</header>

<section class="registrace-sm">
	<div style="background-color: #242424; height: 700px;">
		<div style="padding: 2.5%;">
			<h3 style="color: #e6e6e6;">Registrace</h3><br>
			<form>
				<div class="nad-input">
					<label for="jmapri">Jméno a příjmení:</label>
				</div>
				<div>
					<input type="text" name="jmapri" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label class="nad-input">Přezdívka:</label>
				</div>
				<div>
					<input type="text" name="prezdivka" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label for="heslo">Heslo:</label>
				</div>
				<div>
					<input type="password" name="heslo" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label for="heslo">Heslo znovu:</label>
				</div>
				<div>
					<input type="password" name="heslo" class="prezdivka-input">
				</div><br><br>
				<div>
					<button type="submit" class="odesl-tlac-sm">Odeslat</button>
				</div><br>
				<div class="nad-input">
					<a href="prihlaseni.html?prezdivka=&heslo=">Máte účet? Přihlaste se</a>
				</div>
			</form>
		</div>
	</div>
</section>

<section class="registrace-lg">
	<div style="background-color: #242424; height: 775px; padding-top: 100px;">
		<div class="prihlas-box">
			<h3 style="color: #e6e6e6;">Registrace</h3>
			<form>
				<div class="nad-input">
					<label for="jmapri">Jméno a příjmení:</label>
				</div>
				<div>
					<input type="text" name="jmapri" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label class="nad-input">Přezdívka:</label>
				</div>
				<div>
					<input type="text" name="prezdivka" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label for="heslo">Heslo:</label>
				</div>
				<div>
					<input type="password" name="heslo" class="prezdivka-input">
				</div>
				<div class="nad-input">
					<label for="heslo">Heslo znovu:</label>
				</div>
				<div>
					<input type="password" class="prezdivka-input">
				</div><br><br>
				<div>
					<button type="submit" class="odesl-tlac-lg" name="odeslat">Odeslat</button>
				</div><br>
				<div style="margin-left: 34%; width: 35%;" class="nad-input">
					<a href="prihlaseni.html?prezdivka=&heslo=">Máte účet? Přihlaste se</a>
				</div>
			</form>
		</div>
	</div>
</section>

<section>
	<!-- Kontakty -->
	<div class="kontakty">
		<div class="container pt-4">
			<div class="row">
				<div class="col-md-4 najdete">	
					<div class="row">
						<div class="col-md-12">
							<h6>Najdete nás na:</h6>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<h6>_______________________</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<a href="https://www.facebook.com/auschwitzmemorial/" class="najdete">
							<img src="facebook_icon.png" style="width: 25px; height: 25px;">
						</a>
						<a href="" class="najdete">
							<img src="instagram_icon.png" style="width: 25px; height: 25px;">
						</a>
						<a href="" class="najdete">
							<img src="twitter_icon.png" style="width: 25px; height: 25px;">
						</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 kont">
					<div class="row">
						<div class="col-md-12">
							<h6>Odkazy:</h6>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<h6>_______________</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="odkaz" href="https://cs.wikipedia.org/wiki/Auschwitz">Wikipedie</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 kont">
					<div class="row">
						<div class="col-md-12">
							<h6>Kontakt:</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h6>_________________</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="mailto:kocentracnitabory@fanklub.cz?subject=koncentraksupr" class="odkaz">kocentracnitabory@fanklub.cz</a>
							<p>+420 758 642 224</p>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</section>

<footer class="pata">
	<div class="container">
			<div class="row">
				<p class="col-sm-12" style="margin-top: 27.5px;">Auschwitz Fanklub, 2022</p>
			</div>
		</div>
</footer>

<?php
    if(isset($_POST["odeslat"])) {
        $username = $_POST["prezdivka"];
        $password = $_POST["heslo"];

        $mysqli = new mysqli("localhost", "root", "", "databasse");
        if($mysqli->connect_error) {
            die("Nepodařilo se připojit k DB");
        }
        $sql = "";
        $sql = "INSERT INTO users (username, password) VALUES ('$username', $password)";
        

        
        $res = $mysqli->query($sql);
        if($res === TRUE) {
            echo "Povedlo se!";
        } else {
            echo $mysqli->error;
        }
    }

?>
</body>
</html>