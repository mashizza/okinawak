<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Книги'=>array('admin'),
	'Добавить',
);

$this->menu=array(	
	array('label'=>'Список Книг', 'url'=>array('admin')),
);
?>

<h1>Добавить Книгу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>