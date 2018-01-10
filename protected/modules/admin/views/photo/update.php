<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Фотографии'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	array('label'=>'Список Фотографий', 'url'=>array('admin')),
	array('label'=>'Создать Фото', 'url'=>array('create')),
	array('label'=>'Просмотр Фото', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Редактировать Фото <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'albums' => $albums)); ?>