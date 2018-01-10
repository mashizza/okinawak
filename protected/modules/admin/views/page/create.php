<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Стриницы'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Управление Страницами', 'url'=>array('admin')),
);
?>

<h1>Новая Страница</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'pages' => $pages)); ?>