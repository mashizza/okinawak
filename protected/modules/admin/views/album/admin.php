<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */

$this->breadcrumbs=array(
	'Фотоальбомы'=>array('admin')	
);

$this->menu=array(
	array('label'=>'Список Фотоальбомов', 'url'=>array('admin')),
	array('label'=>'Создать Фотоальбом', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('photo-album-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Фотоальбомы</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'photo-album-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',		
		'title',
		'tags',
		'visible:Boolean',
		'sort_order',
		'created',
		'modified',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
