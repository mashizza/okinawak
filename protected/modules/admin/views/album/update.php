<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */

$this->breadcrumbs=array(
	'Фотоальбомы'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	array('label'=>'Список Фотоальбомов', 'url'=>array('admin')),
	array('label'=>'Создать Фотоальбом', 'url'=>array('create')),
	array('label'=>'Редактировать Фотоальбом', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Редактировать Фотоальбом <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'albums' => $albums, 'previews' => $previews)); ?>