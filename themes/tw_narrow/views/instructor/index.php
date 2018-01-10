<?php
$this->pageTitle = Yii::app()->name . ' - Инструкторы';
?>
<h1>Инструкторы</h1>

<?php
$this->beginWidget('application.extensions.PrettyPhoto.PrettyPhoto', array(
	'id' => 'pretty_photo',
	'options' => array(
		'opacity' => 0.60,
		'modal' => true,
	),
));
?>

<?php if(empty($model)): ?>
<p>К сожалению, инструкторов пока нет.</p>
<?php else: ?>
<?php $data = array_chunk($model, 3); ?>
<div class="row-fluid">
<?php foreach ($data as $row): ?>
	<ul class="thumbnails">
		<?php foreach ($row as $instructor): ?>
			<li class="span4">
				<div class="thumbnail">
					
					<a href="<?php echo Yii::app()->baseUrl.'/images/instructors/' . $instructor->attributes['photo']; ?>" rel="prettyPhoto" title ="<?php echo $instructor->attributes['fname'] . ' ' . $instructor->attributes['lname']; ?>">
					<?php echo CMImage::image( Yii::app()->baseUrl.'/images/instructors/' . $instructor->attributes['photo'], '', 
							array(
								'timthumb' => array('w' => 350), 
								'rel' => 'prettyPhoto')); ?>
					</a>
					<div class="caption">
						<h4><?php echo $instructor->getName(); ?></h4>
						<p><?php echo $instructor->attributes['description']; ?></p>

						<?php if (!empty($instructor->attributes['rang'])): ?>
						<p><?php echo $instructor->attributes['rang']; ?></p>
						<?php endif; ?>

							
						<?php if (!empty($instructor->attributes['email'])): ?>
							<div class="email_txt"><?php echo $instructor->attributes['email']; ?></div>
						<?php endif; ?>

						<?php if (!empty($instructor->attributes['phone'])): ?>
							<div class="phone_txt"><?php echo $instructor->attributes['phone']; ?></div>
						<?php endif; ?>
						
						<?php if (!empty($instructor->attributes['address'])): ?>
							<div class="address_txt"><?php echo $instructor->attributes['address']; ?></div>
						<?php endif; ?>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="clear"></div>
<?php endforeach; ?>
</div>

<?php $this->endWidget('application.extensions.PrettyPhoto.PrettyPhoto'); ?>
	
<div class="pagination pagination-small pagination-centered">
	<?php
// the pagination widget with some options to mess
	$this->widget('application.extensions.CMyPager', array(
		'currentPage' => $pages->getCurrentPage(),
		'itemCount' => $item_count,
		'pageSize' => $page_size,
		'maxButtonCount' => 5,
		'nextPageLabel' => '»',
		'prevPageLabel' => '«',
		'showFirstLink' => false,
		'showLastLink' => false,
		'selectedPageCssClass' => 'active',
		'hiddenPageCssClass' => 'disabled',
		'header' => '',
		'htmlOptions' => array('class' => ''),
	));
	?>
</div>
<?php endif; ?>
