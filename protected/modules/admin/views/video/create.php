<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Видео' => array('Видео'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Создать Видео', 'url'=>array('create')),
	array('label'=>'Управление Видео', 'url'=>array('admin')),
);
?>

<h1>Добавить Видео</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>