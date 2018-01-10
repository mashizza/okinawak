<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Видео'=>array('admin'),
	$model->title,
);

$this->menu=array(	
	array('label'=>'Создать Видео', 'url'=>array('create')),
	array('label'=>'Редактировать Видео', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Видео', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить видео?')),
	array('label'=>'Управлять', 'url'=>array('admin')),
);
?>

<h1>Видео #<?php echo $model->id; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'src',
		'tags',		
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
<?php $preview = $this->widget('application.extensions.Yiitube.Yiitube', array('v' => $model->src));?>

