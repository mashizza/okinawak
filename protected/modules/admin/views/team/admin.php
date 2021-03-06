<?php
/* @var $this TeamController */
/* @var $model TeamMember */

$this->breadcrumbs=array(
	'Team Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TeamMember', 'url'=>array('index')),
	array('label'=>'Create TeamMember', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('team-member-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Team Members</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'team-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fname',
		'mname',
		'lname',
		'description',
		'email',
		/*
		'phone',
		'photo',
		'rang',
		'visible',
		'sort_order',
		'created',
		'modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
