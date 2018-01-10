<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<div class="well sidebar-nav">
				<?php
					$this->widget('zii.widgets.CMenu', array(
						'items' => array(
							array('label' => 'О нас', 'url' => array('/site/about')),
							array('label' => 'Инструкторы', 'url' => array('/instructor')),
							array('label' => 'Галерея', 'url' => array('/album')),
							array('label' => 'Видео', 'url' => array('/video')),
							array('label' => 'Ссылки', 'url' => array('/site/links')),
							array('label' => 'Контакты', 'url' => array('/site/contact')),
						),
						'htmlOptions' => array('class' => 'nav nav-list'),
						'activeCssClass' => 'active',
						'activateItems' => true
					));
				?>	
			</div><!--/.well -->
		</div><!--/span-->

		<div class="span9">		
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'homeLink' => FALSE,
					'links'=> $this->breadcrumbs					
				)); ?><!-- breadcrumbs -->
			<?php endif?>
			<div class="clear"></div>

			<?php echo $content; ?>		

		</div><!--/span-->
	</div><!--/row-->
	<hr>
	<div id="footer">
		
      <div class="container">
		 <div class="left">
			<p class="muted credit">Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>All Rights Reserved.</p>
		</div>
		<div class="right">
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'items' => array(
					array('label' => 'О нас', 'url' => array('/site/about')),						
					array('label' => 'Контакты', 'url' => array('/site/contact')),
					array('label' => 'Обратная Связь', 'url' => array('/site/contact_mail')),
				),
				'htmlOptions' => array('class' => 'nav'),
				'activeCssClass' => 'active',
				'activateItems' => true
			));	?>			
		</div>		
      </div>
    </div><!-- /footer -->
</div>
<?php $this->endContent(); ?>