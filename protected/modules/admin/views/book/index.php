<?php
/* @var $this BookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Книги',
);

$this->menu=array(
	array('label'=>'Добавить Книгу', 'url'=>array('create')),
	array('label'=>'Управление Книгами', 'url'=>array('admin')),
);
?>

<h1>Books</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
