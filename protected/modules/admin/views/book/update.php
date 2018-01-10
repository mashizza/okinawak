<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Книги'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	array('label'=>'Управление Книгами', 'url'=>array('admin')),
	array('label'=>'Добавить Книгу', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),	
);
?>

<h1>Редактировать Книгу <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>