<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Посты'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список Постов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Новый Пост</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>