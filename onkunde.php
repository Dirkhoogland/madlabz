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
				<h2>Onkunde</h2>
				<?php 
					if(!$message){
				?>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
					<label for="kunnen">Wat zou je graag willen kunnen?</label><span style="color: red;">*</span>
					<input type="text" id="kunnen" name="kunnen" required><br><br>	
					<label for="persoon">Met welke persoon kan je goed opschieten?</label><span style="color: red;">*</span>
					<input type="text" id="persoon" name="persoon" required><br><br>
					<label for="getal">Wat is je favoriete getal?</label><span style="color: red;">*</span>
					<input type="text" id="getal" name="getal" required><br><br>	
					<label for="vakantie">Wat heb je altijd bij je als je op vakantie gaat?</label><span style="color: red;">*</span>
					<input type="text" id="vakantie" name="vakantie" required><br><br>
					<label for="beste">Wat is je beste persoonlijke eigenschap?</label><span style="color: red;">*</span>
					<input type="text" id="beste" name="beste" required><br><br>	
					<label for="slechtste">Wat is je slechtste persoonlijke eigenschap?</label><span style="color: red;">*</span>
					<input type="text" id="slechtste" name="slechtste" required><br><br>
					<label for="overkomen">Wat is het ergste wat je kan overkomen?</label><span style="color: red;">*</span>
					<input type="text" id="overkomen" name="overkomen" required><br><br>	
					<input type="submit" value="Verzenden"><br><br>	
				</form>
				<?php 
					}
					else{
				?>
				<p style="color: black; font-size: 24px;">Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]; ?>. Neem nou <?php echo $_POST["persoon"]; ?>. Zelfs met de hulp van een <?php echo $_POST["vakantie"] ?> of <?php echo $_POST["getal"]; ?> kan <?php echo $_POST["persoon"]; ?> niet <?php echo $_POST["kunnen"] ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["beste"] ?>, maar met een te veel aan <?php echo $_POST["slechtste"] ?>. Te veel <?php echo $_POST["slechtste"] ?> leidt tot <?php echo $_POST["overkomen"] ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"] ?>. Helaas voor <?php echo $_POST["persoon"] ?>.</p>

			<?php } ?>
			</div>
		</div>
	</div>
	
</body>
</html>