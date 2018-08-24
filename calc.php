<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Simpel lommeregner</title>
</head>

<body>
	
<form>
	
<input type="text" name="num1" placeholder="Nummer1">
<input type="text" name="num2" placeholder="Nummer2">	
	<select name="operator">
		<option>Plus</option>
		<option>Minus</option>
		<option>Gange</option>
		<option>Divider</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">Udregn</button>
</form>
<p>Resultatet:</p>
<?php
	if (isset($_GET['submit'])) {
		$resultat1 = $_GET['num1'];
		$resultat2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "Plus": 
				echo $resultat1 + $resultat2;
			break;
				case "Minus": 
				echo $resultat1 - $resultat2;
			break;
				case "Gange": 
				echo $resultat1 * $resultat2;
			break;
				case "Divider": 
				echo $resultat1 / $resultat2;
			break;		
					
		}
	}
?>
	
	
	
</body>
</html>