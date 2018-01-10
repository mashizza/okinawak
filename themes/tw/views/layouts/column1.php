<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="hero-unit">
		<h1>Hello, world!</h1>
		<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		<p><a class="btn btn-primary btn-large">Learn more »</a></p>
	</div>
	<?php echo $content; ?>	
	<hr>
	<footer>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.
	</footer><!-- /footer -->
</div>
<?php $this->endContent(); ?>