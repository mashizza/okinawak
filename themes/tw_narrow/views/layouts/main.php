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
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/twitter-bootstrap-hover-dropdown.js'); ?>		
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<style type="text/css">
			body {
				/*padding-top: 60px;*/
				/*padding-bottom: 40px;*/
			}				
		</style>
		<script>
			$(document).ready(function(){
				$('.dropdown-toggle.js-activated').on('click', function(){
					document.location.href = $(this).attr('href');
				})
			});
		</script>
	</head>

	<body>	
		<div id="whole-container">
			<div class="header container-fluid">				
				<div class="logo-left left">
					<img src="/themes/tw_narrow/img/embleml.png" alt="Академия окинавского каратэ и кобу-до" width="150"/>
				</div>
				<div class="logo-center">					
					<a href="<?php echo Yii::app()->baseUrl; ?>/"><img src="/themes/tw_narrow/img/title.png" alt="Академия окинавского каратэ и кобу-до"/></a>
				</div>
				<div class="logo-right right">
					<img src="/themes/tw_narrow/img/emblemr.png" alt="Академия окинавского каратэ и кобу-до" width="150"/>
				</div>				
			</div>
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>					
						<div class="nav-collapse collapse">		
							<?php $pages = $this->get_pages(); ?>
							<ul class="nav">
								<li>
									<?php echo CHtml::link('Главная', Yii::app()->baseUrl.'/.');?>
								</li>
								<?php if(isset($pages['about'])): ?>
								<?php echo $this->showPageNavLink($pages['about']);?>
								<?php endif; ?>
								<li>
									<?php echo CHtml::link('Инструкторы', Yii::app()->baseUrl.'/instructor');?>
								</li>
								<li>
									<?php echo CHtml::link('Галерея', Yii::app()->baseUrl.'/album');?>
								</li>
								<li>
									<?php echo CHtml::link('Видео', Yii::app()->baseUrl.'/video');?>
								</li>
								<li>
									<?php echo CHtml::link('Книги', Yii::app()->baseUrl.'/books');?>
								</li>
								<?php if(isset($pages['links'])): ?>
								<?php echo $this->showPageNavLink($pages['links']);?>
								<?php endif; ?>
								<?php if(isset($pages['contacts'])): ?>
								<?php echo $this->showPageNavLink($pages['contacts']);?>
								<?php endif; ?>								
							</ul>									
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>	

			<?php echo $content; ?>				


			<div class="footer">
				<hr/>
				<div class="container-fluid">				
					<?php
					$this->widget('zii.widgets.CMenu', array(
						'items' => array(
							array('label' => 'О нас', 'url' => array('/site/about')),
							array('label' => 'Контакты', 'url' => array('/site/contacts')),
							array('label' => 'Обратная Связь', 'url' => array('/site/contact_mail')),
						),
						'htmlOptions' => array('class' => 'nav nav-list'),
						'activeCssClass' => 'active',
						'activateItems' => true
					));
					?>						
				</div>			
			</div>
		</div>

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-46715913-1', 'okinawa-karate.com.ua');
			ga('send', 'pageview');

		 </script>
	</body>
</html>
