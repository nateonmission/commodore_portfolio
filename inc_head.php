<?php
$displayName = "J. Nathan Allen";
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $displayName . " - " . $pageName; ?></title>
    <!-- <link rel="stylesheet" href="//basehold.it/24"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i&amp;subset=greek' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Poiret+One&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<?php 
if ($pageName == "Portfolio")

  echo '<link rel="stylesheet" type="text/css" href="css/typing.css">';
  echo '<link rel="stylesheet" type="text/css" href="css/cipher.css">';
?>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
		<header  <?php if ($pageName == "Main") echo 'id="hideMeHead"';  ?> >
			<nav>
				<div class="nav-item logo"><a href="index.php" class="nav-item"><img src="img/logowhite.png" class="logo"></a></div>
				<div class="nav-item"><a href="index.php" class="<?php if($pageName=="Main") {echo "selected ";}?>nav-item">main</a></div>
				<div class="nav-item"><a href="gallary.php" class="<?php if($pageName=="Gallary") {echo "selected ";}?>nav-item">gallary</a></div>
				<div class="nav-item"><a href="portfolio.php" class="<?php if($pageName=="Portfolio") {echo "selected ";}?>nav-item">portfolio</a></div>
				<div class="nav-item"><a href="about.php" class="<?php if($pageName=="About") {echo "selected ";}?>nav-item">about</a></div>

			</nav> 
		</header> 
