<?php
/* @var $this InstructorController */
/* @var $model Instructor */

$this->breadcrumbs=array(
	'Instructors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Instructor', 'url'=>array('index')),
	array('label'=>'Create Instructor', 'url'=>array('create')),
	array('label'=>'Update Instructor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Instructor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Instructor', 'url'=>array('admin')),
);
?>

<h1>View Instructor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'description',
		'email',
		'phone',
		'created',
		'modified',
	),
)); ?>
