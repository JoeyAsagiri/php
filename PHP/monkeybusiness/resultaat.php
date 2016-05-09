<!DOCTYPE html>
<html>
<header>
<title>Monkey Business</title>
<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheets.css">
</header>
<body>
<div class="center">
<img src="images/monkey-business.jpg" alt="Aap">
</div>

<h1>Select your monkey!</h1>

<img src="images/monkey_swings.png" alt="Aap">
<br>
<?php
include("aap.php");
include("aapoverzicht.php");

foreach ($ao->getAap() as $value){
		echo '<a href=https://www.google.nl/search?q='.$value.'&tbm=isch>'.$value.'</a>';
		echo "<br>";
}
?>
</body>
</html>