<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Страницы'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(	
	array('label'=>'Создание Страницы', 'url'=>array('create')),
	array('label'=>'Просмотр Страницы', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Страницами', 'url'=>array('admin')),
);
?>

<h1>Редактирование Страницы <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'pages' => $pages)); ?>