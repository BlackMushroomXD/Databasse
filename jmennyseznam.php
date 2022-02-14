<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seznam jmen</title>
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
				<a href="jmennyseznam.html">Jmenný seznam</a>
			</div>
		</div>

		<div class="row">
			<div class="kolaps">
				<div class="col-md-12 kolapsnabid">
					<a href="fotogalerie.html">Fotogalerie</a>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-12 kolapsnabid">
				<a href="prihlaseni.html?prezdivka=&heslo=">Přihlášení</a>
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
					<a href="jmennyseznam.html">Jmenný seznam</a>
				</li>
				<li class="drpdwn">
					<a href="fotogalerie.html" class="drpdwn-tlac">Fotogalerie</a>
						<div class="drpdwn-menu">
							<a href="fot-zbrane.html" class="drpdwn-nabidka1">Zbraně</a>
							<a href="fot-bitvy.html" class="drpdwn-nabidka2">Bitvy</a>
							<a href="fot_vyznos.html" class="drpdwn-nabidka3">Významné osoby</a>
						</div>
				</li>
				<li class="prihlaseni">
					<a href="prihlaseni.html?prezdivka=&heslo=">Přihlášení</a>
				</li>
			</ul>
		</div>
	</div>		
</header>

<section>
	<!-- Obrázek pro mobily -->
	<div class="zajimavosti-obr-maly"></div>
	<!-- Obrázek pro větší obrazovky -->
	<div class="zajimavosti-obr-velky"></div>
</section>

<section>
	<!-- Hlavní sekce -->
	<div class="mainsection pt-3">
		<div class="container">
			<div style="background-color: white; float: right; width: 65%; color: black; border-radius: 15px; padding: 10px;">
				<h3>Přidání osoby</h3>
				<p style="font-size: x-small;">(Zde přidáte člena, který není v naší databázi)</p><br>
				<form method="post">
					<div id="prid-Data_left">
						<label for="prid-Jm">Jméno</label><br>
						<input type="text" id="prid-Jm" class="prid-Inputy" name="jmeno" placeholder="Jan"><br>
					</div>
					<div id="prid-Data_right">
						<label for="prid-Prijm">Příjmení</label><br>
						<input type="text" id="prid-Prijm" class="prid-Inputy" name="prijmeni" placeholder="Novák"><br>
					</div>
					<div id="prid-Data_left">
						<label for="prid-Vek">Věk</label><br>
						<input type="number" id="prid-Vek" name="vek" class="prid-Inputy"><br>
					</div>
					<div id="prid-Data_right">
						<label for="prid-Pohl">Pohlaví</label><br>
						<input type="radio" id="prid-Pohl_muz" name="pohlavi" value="MUZ">
						<label for="prid-Pohl_muz">Muž</label><br>
						<input type="radio" id="prid-Pohl_zena" name="pohlavi" value="ZENA">
						<label for="prid-Pohl_zena">Žena</label><br>
					</div>
					<div id="prid-Data_left">
						<label for="prid-MestBydl">Město před přesídlením</label>
						<input type="text" id="prid-MestBydl" class="prid-Inputy" name="mesto" placeholder="Praha"><br>
					</div>
					<div id="prid-Data_right">
						<label for="prid-Trans">Transport</label><br>
						<input type="number" id="prid-Trans" class="prid-Inputy" name="transport" placeholder="max. 999" max="999"><br>
					</div>

					<div>
						<input type="submit" name="odeslat" value="Odeslat">
					</div>
				</form>
			</div>
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
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $vek = $_POST["vek"];
		$pohlavi = $_POST["pohlavi"];
		$mesto = $_POST["mesto"];
		//$transport = $_POST["transport"];

        $mysqli = new mysqli("localhost", "root", "", "wea_databasse");
        if($mysqli->connect_error) {
            die("Verbindung zur Datenbank fehlgeschlagen");
        }
        $sql = "";
        if($pohlavi = "MUZ") {
            $sql = "INSERT INTO udaje_male (jmeno, prijmeni, vek, mesto) VALUES ('$jmeno', '$prijmeni', $vek, '$mesto')";
        }if($pohlavi = "ZENA") {
            $sql = "INSERT INTO udaje_female (jmeno, prijmeni, vek, mesto) VALUES ('$jmeno', '$prijmeni', $vek, '$mesto')";
        } else {
            $sql = "INSERT INTO udaje_child (jmeno, prijmeni, vek, mesto) VALUES ('$jmeno', '$prijmeni', $vek, '$mesto')";
        }

        
        $res = $mysqli->query($sql);
        if($res === TRUE) {
            echo "Hinzugefügt!";
        } else {
            echo $mysqli->error;
        }
    }

?>
</body>
</html>