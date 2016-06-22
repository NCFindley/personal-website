<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<?php 
	$url = "quotations.php"; 
	$i = 0;
	$filename = $_SERVER['PHP_SELF'];
	$currentfile = strrchr($filename, "/");
	$trimfile = ltrim($currentfile, "/");
	$mainarray = array ("index.php", "goals.php", "quotations.php");
	$urlname = array ("Home", "Goals", "Quotations");
	$artarray = array()



	?>

	<title>Nels Findley Home Page</title>
</head>
<body>
	<h1>Nels Findley</h1>
		<ul id="navbuttons">


			<?php while ($i < count($mainarray)) { 
			?>
				<li><a 
				<?php if ($mainarray[$i] == $trimfile) {
					echo 'style="color:white;"';
				} ?>
				href="<?php echo $mainarray[$i]; ?>"> <?php echo $urlname[$i] ?></a></li>
				<?php $i = $i + 1;

			} ?>


		</ul>
	<h2>Articles</h2>
		<ul>
			<li><a href="scenario.html">Scenario of Cybersecurity</a></li>
			<li><a href="web_medium.html">How the Web works as Medium</a></li>
		</ul>
	<h2>My Profiles</h3>
		<ul>
			<li><a href = "https://github.com/NCFindley">GitHub</a></li>
			<li><a href = "https://www.linkedin.com/in/nels-findley-917b24116">LinkedIn</a></li>
			<li><a href="https://mobile.twitter.com/NelsFin">Twitter</a></li>
		</ul>

<?php
	echo "Hello";
?>
</body>
</html>