<?php 
include 'common.php';
$pagetitle	= $pt_index;
$pageakey	= $ak_index;
include 'header.php';
?>
<div class="index">
	<a href="runs-linux.php"><?php echo $nav_runslinux; ?></a>
	<a href="desktop-apps.php"><?php echo $nav_desktop; ?></a>
	<a href="spotlights.php"><?php echo $nav_spotlight; ?></a>
	<a href="android.php"><?php echo $nav_android; ?></a>
	<a href="distros.php"><?php echo $nav_distro; ?></a>
	<a href="contribute.php"><?php echo $nav_contribute; ?></a>
</div>
<?php include 'footer.php'; ?>