<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */

$this->breadcrumbs=array(
	'Photo Albums'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List PhotoAlbum', 'url'=>array('index')),
	array('label'=>'Create PhotoAlbum', 'url'=>array('create')),
	array('label'=>'Update PhotoAlbum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PhotoAlbum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PhotoAlbum', 'url'=>array('admin')),
);
?>

<h1>View PhotoAlbum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'title',
		'tags',
		'created',
		'modified',
	),
)); ?>
