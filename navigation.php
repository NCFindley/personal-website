<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<?php 
	$url = "quotations.php"; 
	$i = 0;
	$filename = $_SERVER['PHP_SELF'];
	$currentfile = strrchr($filename, "/");
	$trimfile = ltrim($currentfile, "/");
	$mainarray = array ("index.php", "goals.php", "quotations.php");
	$urlname = array ("Home", "Goals", "Quotations");
	$arturl = array("scenario.php", "web_medium.php");
	$artname = array ("Scenario of Cybersecurity", "How the Web works as Medium");
	?>
<h1>Nels Findley</h1>
<ul id="navbuttons">


			<?php while ($i < count($mainarray)) { 
			?>
				<li><a 
				<?php if ($mainarray[$i] == $trimfile) {
					echo 'style="color:blue;"';
				} ?>
				href="<?php echo $mainarray[$i]; ?>"> <?php echo $urlname[$i] ?></a></li>
				<?php $i = $i + 1;

			} ?>


		</ul>
	<h2>Articles</h2>
		<ul>
			<?php 
				$i = 0;
				while ($i < count($arturl)) { 
			?>
				<li><a 
				<?php if ($arturl[$i] == $trimfile) {
					echo 'style="color:blue;"';
				} ?>
				href="<?php echo $arturl[$i]; ?>"> <?php echo $artname[$i] ?></a></li>
				<?php $i = $i + 1;

			} ?>
		</ul>
	<h2>My Profiles</h3>
		<ul>
			<li><a href = "https://github.com/NCFindley">GitHub</a></li>
			<li><a href = "https://www.linkedin.com/in/nels-findley-917b24116">LinkedIn</a></li>
			<li><a href="https://mobile.twitter.com/NelsFin">Twitter</a></li>
		</ul>