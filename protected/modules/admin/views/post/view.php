<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Посты'=>array('index'),
	$model->title,
);


$this->menu=array(
	array('label'=>'Создать Пост', 'url'=>array('create')),
	array('label'=>'Редактировать Пост', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Пост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить пост?')),
	array('label'=>'Управлять Постами', 'url'=>array('admin')),
);
?>

<h1>Пост #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'alias',
		'short_message',
		'message:Html',
		'tags',
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
