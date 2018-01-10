<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Фотографии'=>array('index'),
	'Создать Фото',
);

$this->menu=array(
	array('label'=>'Список Фотографий', 'url'=>array('admin')),
);
?>

<h1>Создать Фото</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'albums' => $albums)); ?>