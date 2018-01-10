<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Посты',
);

$this->menu=array(
	array('label'=>'Создать Пост', 'url'=>array('create')),
	array('label'=>'Управление Постами', 'url'=>array('admin')),
);
?>

<h1>Посты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
