<!DOCTYPE html> 
<html> 
<head>     
	<meta charset="utf-8">     
	<title><?php echo $judul ?></title>     
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/styledlemas.css"> 
</head> 
<body>     
	<div id="wrapper">         
		<header >             
			<hgroup>                 
				<h1><?php echo $judul ?></h1>                 
				<h3>SMK Pancakarya Tangerang</h3>             
			</hgroup>             
			<nav>                 
				<ul>                     
					<li><a href="<?php echo base_url().'index.php/DLemas' ?>">Form</a></li>                     
					<li><a href="<?php echo base_url().'index.php/DLemas/Result' ?>">Result</a></li>             
				</ul>             
			</nav>             
					<div class="clear"></div>         
		</header>