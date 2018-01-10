<?php
/* @var $this TeamController */
/* @var $model TeamMember */

$this->breadcrumbs=array(
	'Team Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeamMember', 'url'=>array('index')),
	array('label'=>'Create TeamMember', 'url'=>array('create')),
	array('label'=>'Update TeamMember', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeamMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeamMember', 'url'=>array('admin')),
);
?>

<h1>View TeamMember #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'mname',
		'lname',
		'description',
		'email',
		'phone',
		'photo',
		'rang',
		'visible',
		'sort_order',
		'created',
		'modified',
	),
)); ?>
