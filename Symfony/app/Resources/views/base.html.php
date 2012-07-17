<html>
<head>
 <title><?php $view['slots']->output('title', 'Hello Application') ?></title>
<link href="<?php echo $view['assets']->getUrl('/bundles/acmesepablog/css/main.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $view['assets']->getUrl('/bundles/acmesepablog/images/guess.jpg') ?>" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body >
		<div id="loginbox">
		<br><br><br><br>
		<a href="logout" ><input style="width: 80px; height: 30px " type="button" value="Logout"/></a>
		</div>
	<div id="wrapper">
	
		<div id="header">
		
		
		<h1><?php $view['slots']->output('header')?></h1>
		</div><!-- #header-->
	
		<div id="middle">
				
			<div id="container">
				<div id="content">
				 <?php $view['slots']->output('body') ?>
				</div><!-- #content-->
			</div><!-- #container-->
			<div align='left' id="sidebar">
				
				
		<h3>		<?php $view['slots']->output('menue')?></h3>
				
				
				
				
				
			</div><!-- #sidebar -->
			<div id="sidebarR">
			<?php $view['slots']->output('top10')?>
			</div>
		</div><!-- #middle-->
	</div><!-- #wrapper -->
	
	<div id="footer">
		<div class="langbar">
		</div>
		
	</div><!-- footer  -->
</body>

</html>
