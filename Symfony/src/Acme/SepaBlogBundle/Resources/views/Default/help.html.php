<?php $view->extend('::base.html.php')?>
<?php $view['slots']->set('title','Guess Game Help')?>
<?php $view['slots']->start('body')?>
<?php $view['slots']->set('header','How to Play!')?>
	<ul>
	<li><h2>Wellcome to Guess Game Help!</h2></li>
	<li>You have to Login first to play the Game </li>
	<li> choose a uniqe user name for playing </li>
	<li>In each Level of the Guess Game a random number is generated</li>
	<li>You should guess what would be the the Random number</li>
	<li>If you found the number in less tries then you will be in top 10 lists</li>
	<li><h1>Enjoy Playing .........</h1>
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