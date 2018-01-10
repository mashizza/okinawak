<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Фотографии'=>array('index'),
	'Список Фотографий',
);

$this->menu=array(
	array('label'=>'Создать Фото', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('photo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Фотографии</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Расширенный Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'photo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',		
		'photo_album_id',
		'title',
		 array(  
			 'name'=>'src',
			'type'=>'html',
            'value'=>'CHtml::image(Yii::app()->baseUrl."/timthumb.php?w=100&src=".Yii::app()->baseUrl."/images/photos/".$data->src, $data->title)',			 
		),
		'created',
		'modified',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
