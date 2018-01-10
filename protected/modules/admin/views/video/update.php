<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Видео'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(	
	array('label'=>'Создать Видео', 'url'=>array('create')),
	array('label'=>'Просмотр Видео', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактировать Видео <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>