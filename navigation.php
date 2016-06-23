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
	<div>
			<a href = "https://github.com/NCFindley"><img title="GitHub" alt="GitHub" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" width="40" height="40"></a>
			<a href = "https://www.linkedin.com/in/nels-findley-917b24116"><img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" /></a>
			<a href="https://mobile.twitter.com/NelsFin"> <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" /></a>
		</div>
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
		