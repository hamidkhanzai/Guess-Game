<?php $view->extend('::base.html.php')?>
<?php $view['slots']->set('title','Guess Game Type')?>
<?php $view['slots']->set('header','Please Choose Game Level!')?>

<?php $view['slots']->start('body')?>
<form action="<?php echo $view['router']->generate('type') ?>" method="post" <?php echo $view['form']->enctype($form) ?> >
<?php echo $view['form']->widget($form)  ?>

<input type="submit" value="Go Ahead.." />
</form>
<?php $view['slots']->stop()?>
<?php $view['slots']->start('menue')?>
	<ul>
			<li><a href="create">Home</a></li>			
			<li><a href="<?php echo $D1 ?>" >Play 1D</a></li>
			<li><a href="<?php echo $D2?>" >Play 2D</a></li>
			<li><a href="<?php echo $D3?>" >Play 3D</a></li>
			<li><a href="help" >Help</a></li>
			<li><a href="about" >About Us</a></li>
		
		</ul>
<?php $view['slots']->stop()?>