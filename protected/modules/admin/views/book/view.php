<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Книги'=>array('admin'),
	$model->title,
);

$this->menu = array(
	array('label' => 'Управление Книгами', 'url'=>array('admin')),
	array('label' => 'Добавить Книгу', 'url'=>array('create')),
	array('label' => 'Редактировать Книгу', 'url'=>array('update', 'id'=>$model->id)),
	array('label' => 'Удалить Книгу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить книгу?')),
);
?>

<h1>Просмотр Книги #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description:Html',
		'src',		
		 array(        
			'name'=>'preview_src',
			'type'=>'raw',
			'value' => CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/books/'.$model->preview_src, "image"),
		),
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
