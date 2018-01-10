<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Страницы'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Создать Страницу', 'url'=>array('create')),
	array('label'=>'Редактировать Страницу', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Страницу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление Страницами', 'url'=>array('admin')),
);
?>

<h1>Страница #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'user_id',
		'parent_page_id',
		'alias',
		'title',
		'content:Html',
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
