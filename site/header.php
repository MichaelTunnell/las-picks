<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pagetitle; ?> &middot; Linux Action Show &middot; Jupiter Broadcasting</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="<?php echo $pageakey; ?>">
	<header>
		<div id="navigation">
			<input type="checkbox" id="menu">
			<label class="menu" for="menu" onclick></label>
			<nav role="mainnav">
			    <ul>
					<li><a href="runs-linux.php"><?php echo $nav_runslinux; ?></a></li>
					<li><a href="desktop-apps.php"><?php echo $nav_desktop; ?></a></li>
					<li><a href="spotlights.php"><?php echo $nav_spotlight; ?></a></li>
					<li><a href="android.php"><?php echo $nav_android; ?></a></li>
					<li><a href="distros.php"><?php echo $nav_distro; ?></a></li>
					<li><a href="contribute.php"><?php echo $nav_contribute; ?></a></li>
					<div class="clr"></div>
			    </ul>
			</nav>
			<?php if ($pageakey == "index" || $pageakey == "contribute") {} else { ?>
				<input type="checkbox" id="years">
				<label class="years" for="years" onclick><img src="calendar-icon.png" /></label>
				<nav role="years">
				    <ul>
						<?php 
							foreach ($startdates as $startdate) {
								$sdyear = substr($startdate, 0, 4);
								if (in_array($sdyear, $pagetime)) {
						 ?>
						<li><a href="#<?php echo $sdyear; ?>"><?php echo $sdyear; ?></a></li>
						<?php }} ?>
						<div class="clr"></div>
				    </ul>
				</nav>
			<?php } ?>
		</div>
	</header>
	<a class="forkongithub" href="https://github.com/MichaelTunnell/las-picks"><span>Fork me on GitHub</span><img src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
	<div class="headcase">
		<?php if ($pageakey == "android") { ?>
		<img class="logo" src="jb-las-ting-logo-192.jpg" /><br />
		<h1><span class="lastitle">Linux Action Show &amp; Ting<br /></span>
		<?php } else { ?>
		<img class="logo" src="jb-las-logo-192.jpg" /><br />
		<h1><span class="lastitle">Linux Action Show<br /></span>
		<?php } ?>
			<span class="pagetitle"><?php echo $pagetitle; ?></span>
		</h1>
	</div>
