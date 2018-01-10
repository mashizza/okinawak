<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */

$this->breadcrumbs=array(
	'Фотоальбомы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список Фотоальбомов', 'url'=>array('admin')),
);
?>

<h1>Создать Фотоальбом</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'albums' => $albums, 'previews' => $previews)); ?>