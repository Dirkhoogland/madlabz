<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$message = true;
	}
	else{
		$message = false;
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Er Heerst Paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="allcontainer">	
		<h1 id="madlips">Mad Libs</h1>
		<div id="container">	
			<div id="header">		
				<a href="paniek.php"><p>Er heerst paniek</p></a>
				<a href="onkunde.php"><p>Onkunde</p></a>
			</div>
			<div id="formcontainer">	
				<h2>Er heerst paniek...</h2>
				<?php 
					if(!$message){
				?>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
					<label for="huisdier">Welk dier zou je het liefst als huisdier willen hebben?</label><span style="color: red;">*</span>
					<input type="text" id="huisdier" name="huisdier" required><br><br>	
					<label for="belangrijkste">Wie is de belangrijkste persoon in je leven?</label><span style="color: red;">*</span>
					<input type="text" id="belangrijkste" name="belangrijkste" required><br><br>
					<label for="land">In welk land zou je wilen wonen?</label><span style="color: red;">*</span>
					<input type="text" id="land" name="land" required><br><br>	
					<label for="verveelt">Wat doe je als je je verveelt?</label><span style="color: red;">*</span>
					<input type="text" id="verveelt" name="verveelt" required><br><br>
					<label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label><span style="color: red;">*</span>
					<input type="text" id="speelgoed" name="speelgoed" required><br><br>
					<label for="spijbelen">Bij welke docent spijbel je het liefst?</label><span style="color: red;">*</span>
					<input type="text" id="spijbelen" name="spijbelen" required><br><br>	
					<label for="kopen">Als je €100.000,- had, wat zou je dan kopen?</label><span style="color: red;">*</span>
					<input type="text" id="kopen" name="kopen" required><br><br>
					<label for="bezigheid">Wat is je favoriete bezigheid?</label><span style="color: red;">*</span>
					<input type="text" id="bezigheid" name="bezigheid" required><br><br>	
					<input type="submit" value="Verzenden"><br><br>	
				</form>
				<?php 
					}
					else{
				?>
				<p style="color: black; font-size: 24px;">Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>. Koning <?php echo $_POST["spijbelen"]; ?> is ten einde raad en als koning <?php echo $_POST["spijbelen"]; ?> ten einde raad in roept hij zijn ten-einde-raadsheer <?php echo $_POST["belangrijkste"]; ?>.</p><br><br>
				<p style="color: black; font-size: 24px;">"<?php echo $_POST["belangrijkste"]; ?>! Het is een ramp! Het is een schande!"</p><br><br>
				<p style="color: black; font-size: 24px;">"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p><br><br>
				<p style="color: black; font-size: 24px;">"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net nog <?php echo $_POST[""] ?> voor hem gekocht!"</p><br><br>
				<p style="color: black; font-size: 24px;">"Majesteit, uw <?php echo $_POST["huisdier"]; ?> komt vast vanzelf weer terug?"</p><br><br>
				<p style="color: black; font-size: 24px;">"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]; ?> leren?"</p><br><br>
				<p style="color: black; font-size: 24px;">"Maar Sire, daar kunt u toch uw <?php echo $_POST["kopen"]; ?> voor gebruiken?"</p><br><br>
				<p style="color: black; font-size: 24px;">"<?php echo $_POST["belangrijkste"]; ?>, je hebt helemaal gelijk! Wat zou ik toch doen als ik jou niet had."</p><br><br>
				<p style="color: black; font-size: 24px;">"<?php echo $_POST["verveelt"]; ?>, Sire."</p><br><br>



				<?php }	 ?>
			</div>
		</div>
	</div>
	
</body>
</html>