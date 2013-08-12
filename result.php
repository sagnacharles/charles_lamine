<?php
$choixq1 = $_POST['choixq1'];
$choixq2 = $_POST['choixq2'];
$choixq3 = $_POST['choixq3'];
?>

<!DOCTYPE html> 
<html> 
  <head> 
	<title>Resultats</title> 
<link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.1.0.min.css" />
	<link rel="stylesheet" href="index.css" /> 

    <script src="jquery.mobile/jquery-1.7.2.min"></script>
	<script src="jquery.mobile/jquery.mobile-1.1.0.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="cordova-1.9.0.js"></script>
	<script type="text/javascript" charset="utf-8" src="index.js"></script>
	</head> 
	<body> 
		<div data-role="page"> 
			<div data-role="header"> 
				<div data-id="navig" data-role="navbar">
				<ul>
					<li> <a href="index.html"> Accueil </a></li>
					<li> <a href="apropos.html"> A propos </a></li>
					<li> <a href="aide.html"> Aide </a></li>
				</ul>
			</div>
			</div>
			<div data-role="content">	
			<h1 style="text-align: center">Resultats</h1> 
				<h3> Merci d'avoir jou&eacute; </h3>
				<?php 
					echo "</br> Question 1: ".$choixq1;
					echo "</br> Question 2: ".$choixq2;
					echo "</br> Question 3: ".$choixq3;					
				?>
			</div>
			<div data-role="footer">
				<h6 style="font-family:Ms-trebuchet; color:red">By Te@m-Civique 2013</h6>
			</div>		
		</div> 
	</body> 
</html>


