<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Фотографии'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список Фотографий', 'url'=>array('admin')),
	array('label'=>'Создать Фото', 'url'=>array('create')),
	array('label'=>'Редактировать Фото', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удвлить Фото', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),	
);
?>

<h1>View Photo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		 array(        
			'name'=>'src',
			'type'=>'raw',
			'value' => CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/photos/'.$model->src, "image"),
		),
		'tags',
		'sort_order',
		'visible:Boolean',
		'created',
		'modified',
	),
)); ?>
