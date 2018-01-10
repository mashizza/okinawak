<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen_admin.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print_admin.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie_admin.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main_admin.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form_admin.css" />

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<title>Admin Panel</title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?>: Admin Panel</div>
	</div><!-- header -->
	<div id="mainmenu">	
		<?php if(Yii::app()->user->isGuest): ?>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(	array('label'=>'Login', 'url'=>array('/admin/default/login'), 'visible'=>Yii::app()->user->isGuest)),
		)); ?>
		<?php else: ?>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/admin/default')),
				array('label'=>'Посты', 'url'=>array('/admin/post/admin')),
				array('label'=>'Страницы', 'url'=>array('/admin/page/admin')),
				array('label'=>'Фото', 'url'=>array('/admin/photo/admin')),
				array('label'=>'Фотоальбомы', 'url'=>array('/admin/album/admin')),
				array('label'=>'Видео', 'url'=>array('/admin/video/admin')),
				array('label'=>'Инсрукторы', 'url'=>array('/admin/instructor/admin')),			
				array('label'=>'Книги', 'url'=>array('/admin/book/admin')),
				//array('label'=>'Настройки', 'url'=>array('/admin/default/settings')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		<?php endif; ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>	
	<?php echo $content; ?>
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
