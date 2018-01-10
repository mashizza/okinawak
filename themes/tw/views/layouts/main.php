<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/add.css"/>
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->		
		<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.js'); ?>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}				
		</style>
	</head>

	<body>		
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo Yii::app()->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
					<div class="nav-collapse collapse">						
						<?php
						$this->widget('zii.widgets.CMenu', array(
							'items' => array(
								array('label' => 'Главная', 'url' => array('/..')),
								array('label' => 'Галерея', 'url' => array('/album')),
								array('label' => 'Видео', 'url' => array('/video')),
								array('label' => 'Контакты', 'url' => array('/contact')),								
								array('label' => 'Инструкторы', 'url' => array('/instructor')),
							),
							'htmlOptions' => array('class' => 'nav'),
							//'activeCssClass'=>'active',
						));
						?>						
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>	
		
		<?php echo $content; ?>				
		
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
	</body>
</html>
