<?php 
	if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GBI - <?= h($page_title); ?></title>
	<link rel="stylesheet" href=" <?= url_for('/stylesheets/staff.css'); ?>" />
</head>
<body>

<header>
	<h1>GBI Staff Area</h1>
</header>

<navigation>
	<ul>
		<li><a href= <?= url_for('staff/index.php'); ?>>Menu</a></li>
	</ul>
</navigation>