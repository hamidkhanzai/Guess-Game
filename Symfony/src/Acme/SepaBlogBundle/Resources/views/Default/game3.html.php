<?php $view->extend('::base.html.php')?>
<?php $view['slots']->set('title','Game Level Three')?>
<?php $view['slots']->set('header','Guess Game Level Three!')?>

<?php $view['slots']->start('body')?>
<form action="<?php $view['router']->generate('Game3D') ?> " method="post" <?php echo $view['form']->enctype($form) ?> >
  	<table width='400px'>
  		<tr>
			<td><?php echo $view['form']->label($form['guess']); ?></td>
			<td><?php echo $view['form']->widget($form['guess']); ?></td>
		</tr>
		<tr>
			<td><?php echo $view['form']->label($form['guess2']); ?></td>
			<td><?php echo $view['form']->widget($form['guess2']); ?></td>
		</tr>
		<tr>
			<td><?php echo $view['form']->label($form['guess3']); ?></td>
			<td><?php echo $view['form']->widget($form['guess3']); ?></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Go Ahead.." /></td>
		</tr>
  	 	<tr>
			<td></td>
			<td><div style ="margin: 10px; border: 1px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0;">Chances:&nbsp;&nbsp;&nbsp;<?php echo $tipChance?></div>
			</td>
		</tr>
		<tr>
		<td></td>
		<td><div style ="margin: 10px; border: 1px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0;">Hints:	&nbsp;&nbsp;&nbsp;	<?php echo $tipHint?></div>
		</td>
		</tr>
		<tr>
		<td></td>
		<td><div style ="margin: 10px; border: 1px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0;">Scors:	&nbsp;&nbsp;&nbsp;	<?php echo $tipScor?></div>
		</td>
		</tr>
	</table>
   	 	

</form>
<?php $view['slots']->stop()?>

<?php $view['slots']->start('top10')?>
<table widh='300px' border='1' style ="margin: 10px; border: 4px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0;">
<tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>


<?php foreach ($visitors as $visit):?>
<tr>
        <td>&nbsp;&nbsp;&nbsp;<?php echo $visit->getName()?></td><td>&nbsp;&nbsp;&nbsp;<?php echo $visit->getThird()?></td></tr>    
<?php endforeach;?>
</table>
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
