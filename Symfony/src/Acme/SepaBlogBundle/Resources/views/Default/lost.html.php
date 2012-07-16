<?php $view->extend('::base.html.php')?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php $view['slots']->set('header',' You have lost The Game')?> 

<?php $view['slots']->start('body') ?> 
<a href="<?php echo $url?>" >Click Here To Play Again.....</a>
<?php $view['slots']->stop()?>


