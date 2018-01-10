<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Посты'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	array('label'=>'Создать Пост', 'url'=>array('create')),
	array('label'=>'Редактировать Пост', 'url'=>array('update', 'id'=>$model->id)),	
	array('label'=>'Управлять Постами', 'url'=>array('admin')));
?>

<h1>Редактировать Пост<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>