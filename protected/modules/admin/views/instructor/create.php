<?php
/* @var $this InstructorController */
/* @var $model Instructor */

$this->breadcrumbs=array(
	'Инструкторы'=>array('admin'),
	'Добавить Инструктора',
);

$this->menu=array(	
	array('label'=>'Управление инструкторами', 'url'=>array('admin')),
);
?>

<h1>Добавить Инструктора</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>