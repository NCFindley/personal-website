<?php if ($_GET["theme"] == "egg"){ 
?>
			<link type="text/css" rel="stylesheet" href="easteregg.css">
<?php } else {  
?>
			<link type="text/css" rel="stylesheet" href="stylesheet.css">
<?php } 

	$i = 0;
	$filename = $_SERVER['PHP_SELF'];
	$currentfile = strrchr($filename, "/");
	$trimfile = ltrim($currentfile, "/");
	$mainarray = array ("index.php", "goals.php", "quotations.php");
	$urlname = array ("Home", "Goals", "Quotations");
	$arturl = array("scenario.php", "web_medium.php");
	$artname = array ("Scenario of Cybersecurity", "How the Web Works as Medium");
	$madename = array("Rock, Paper, Scissors", "Tic Tac Toe");
	$madeurl = array("rock_paper_scissors/index.php","Tic_Tac_Toe/index.php");
?>
	<div class = "social">
		<h1 class = "social__name">Nels Findley</h1>

		<div class = "socbutton">
			<a  href = "https://github.com/NCFindley"><img title="GitHub" alt="GitHub" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" </a>
			<a class = "socbutton" href = "https://www.linkedin.com/in/nels-findley-917b24116"><img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" /></a>
			<a class = "socbutton" href="https://mobile.twitter.com/NelsFin"> <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" /></a>
			<a class = "socbutton" href="<?php echo $trimfile; ?>?theme=egg"> <img title="Egg" alt="Egg" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSe06-g6-zLq8M7arcu6MMj7pLaTbcK5cRC6I984hwj9dR9DMSz1jqNdPM" /></a>
		</div>

		<div class = "navbar">
			<h2 class = "navbar__topic">Myself</h2>
					<?php while ($i < count($mainarray)) 
					{ 
					?>
						<div><a
						<?php if ($mainarray[$i] == $trimfile) {
							echo 'style="color:blue;"';
						} ?>
						href="<?php echo $mainarray[$i]; ?>"> <?php echo $urlname[$i] ?></a>
						</div>
						<?php $i = $i + 1;
						

					} ?>
						

			<h2 class = "navbar__topic">Articles</h2>
					<?php 
						$i = 0;
						while ($i < count($arturl)) { 
					?>
						<div><a
						<?php if ($arturl[$i] == $trimfile) {
							echo 'style="color:blue;"';
						} ?>
						href="<?php echo $arturl[$i]; ?>"> <?php echo $artname[$i] ?></a>
						</div>
						<?php $i = $i + 1;

					} ?>

			<h2 class = "navbar__topic">Websites Created</h2>
					<?php 
								$i = 0;
								while ($i < count($madeurl)) { 
							?>
								<div><a
								<?php if ($madeurl[$i] == $trimfile) {
									echo 'style="color:blue;"';
								} ?>
								href="<?php echo $madeurl[$i]; ?>"> <?php echo $madename[$i] ?></a>
								</div>
								<?php $i = $i + 1;

							} ?>
		</div>
	</div>





