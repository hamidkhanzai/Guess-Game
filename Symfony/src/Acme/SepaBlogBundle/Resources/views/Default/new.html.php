<?php $view->extend('::base.html.php');?>
<?php $view['slots']->start('header')?>
Wellcome to Guess Game Login Here
<?php $view['slots']->stop()?>

<?php $view['slots']->start('body')?>
<form action="<?php echo $view['router']->generate('task') ?>" method="post" <?php echo $view['form']->enctype($form) ?> >
<?php echo $view['form']->widget($form)  ?>

<input type="submit" value="Go Ahead.." />
</form>
<?php $view['slots']->stop()?>