<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */

$this->breadcrumbs=array(
	'Photo Albums'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список Фотоальбомов', 'url'=>array('admin')),
	array('label'=>'Создать Фотоальбом', 'url'=>array('create')),
	array('label'=>'Редактировать Фотоальбом', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Фотоальбом', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить фотоальбом??')),	
);
?>

<h1>Фотоальбом #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',		
		'title',
		'tags',
		'visible',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
