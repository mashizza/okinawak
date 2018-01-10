<?php
/* @var $this InstructorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Инструкторы',
);

$this->menu=array(
	array('label'=>'Добавить Инструктора', 'url'=>array('create')),
	array('label'=>'Управление инструкторами', 'url'=>array('admin')),
);
?>

<h1>Инструкторы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
