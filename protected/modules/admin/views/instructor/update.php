<?php
/* @var $this InstructorController */
/* @var $model Instructor */

$this->breadcrumbs=array(
	'Инструкторы'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	array('label'=>'Список Инструкторы', 'url'=>array('admin')),
	array('label'=>'Добавить Инструктора', 'url'=>array('create')),
	array('label'=>'Просмотр Инструктора', 'url'=>array('view', 'id'=>$model->id)),	
);
?>

<h1>Редактировать Инструктора <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>