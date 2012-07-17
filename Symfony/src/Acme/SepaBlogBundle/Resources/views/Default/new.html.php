<?php $view->extend('::base.html.php');?>
<?php $view['slots']->start('header')?>
Wellcome to Guess Game
<?php $view['slots']->stop()?>

<?php $view['slots']->start('body')?>
<fieldset style="width: 400px; height: 300px">
<form action="<?php echo $view['router']->generate('task') ?>" method="post" <?php echo $view['form']->enctype($form) ?> >
<?php echo $view['form']->widget($form)  ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" style="width: 80px;" value="Login" />
</form>
</fieldset>
<?php $view['slots']->stop()?>
<?php $view['slots']->start('menue')?>
	<ul>
			
			<li><a href="help" >Help</a></li>
			<li><a href="about" >About Us</a></li>
		
		</ul>
<?php $view['slots']->stop()?>