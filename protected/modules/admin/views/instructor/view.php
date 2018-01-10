<?php
/* @var $this InstructorController */
/* @var $model Instructor */

$this->breadcrumbs=array(
	'Инструкторы'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список Инструкторы', 'url'=>array('admin')),
	array('label'=>'Добавить Инструктора', 'url'=>array('create')),
	array('label'=>'Редактировать Инструктора', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Инструктора', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),	
);
?>

<h1>View Instructor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'mname',
		'lname',
		'rang',
		'description:html',
		'email',
		'phone',
		 array(        
			'name'=>'photo',
			'type'=>'raw',
			'value' => CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/instructors/'.$model->photo, "image"),
		),
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
