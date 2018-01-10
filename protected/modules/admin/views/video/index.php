<?php
/* @var $this VideoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Видео',
);

$this->menu=array(
	array('label'=>'Создать Видео', 'url'=>array('create')),
	array('label'=>'Управление Видео', 'url'=>array('admin')),
);
?>

<h1>Видео</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
