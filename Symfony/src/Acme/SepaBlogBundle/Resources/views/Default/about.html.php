<?php $view->extend('::base.html.php')?>
<?php $view['slots']->set('title','Guess Game About Us')?>
<?php $view['slots']->start('body')?>
<?php $view['slots']->set('header','About Us!')?>
	<ul>
	<li><h2>Wellcome to Guess Game!</h2></li>
	<li>The Game developed by group of Afghan students in Technical University of Berlin</li>
	<li>Second Semester three week Project</li>
	<li>The list of Name are as follow</li>
	<li><h2>Coordinator</h2></li>
	<li>Mahmood Asgharzada<li>
	
	<li><h2>DEVELOPERS</h2></li>
	<li>Ghezal Ahmad Zai</li>
	<li>Waheedullah Sulimankhail</li>
	<li>Somaia Zabihi</li>
	<li>Mahmood AsgharZada</li>
	<li>Hamidullah Khanzai</li>
	<li><h2>Modeling</h2>
	<li>Hamidullah Khanzai</li>
	<li>Somaia Zabihi</li>
	<li>Ahmad Sear Mehri</li>
	<li><h2>Configuration</h2></li>
	<li>Walida Fayez</li>
	<li>Mahmood Asgharzada</li>
	<li><h2>Testing</h2></li>
	<li>Waheedullah Sulimankhail</li>
	<li>Ghezal Ahmad Zia</li>
	<li>Ahmad Sear Mehri</li>
	<li><h2>Documentation</h2></li>
	<li>Walida Fayez</li>
	
	
	<li><h1>Hope You Enjoy Playing It.........</h1>
	</ul>
<?php $view['slots']->stop()?>
<?php $view['slots']->start('menue')?>
	<ul>
			<li><a href="create">Home</a></li>			
			<li><a href="D1" >Play 1D</a></li>
			<li><a href="D2" >Play 2D</a></li>
			<li><a href="D3" >Play 3D</a></li>
			<li><a href="help" >Help</a></li>
			<li><a href="about" >About Us</a></li>
		
		</ul>
<?php $view['slots']->stop()?>