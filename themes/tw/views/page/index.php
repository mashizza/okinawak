<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - '.$page_data->attributes['title'];

?>

<?php if(!empty($page_data)): ?>
<h1><?php echo $page_data->attributes['title']; ?></h1>

<?php echo $page_data->attributes['content']; ?>

<?php endif; ?>
