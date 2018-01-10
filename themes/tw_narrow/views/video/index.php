<?php
/* @var $this VideoController */

$this->pageTitle = Yii::app()->name . ' - Видео';

?>
<h1>Видео</h1>

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
<p>К сожалению, видео пока нет.</p>
<?php else: ?>
<?php $data = array_chunk($model, 4); ?>
<div class="row-fluid">
<?php foreach ($data as $row): ?>
	<ul class="thumbnails">
		<?php foreach ($row as $video): ?>
			<li class="span3">
				<div class="thumbnail">
					<a href="<?php echo $video->attributes['src']; ?>" rel="prettyPhoto" title="<?php echo $video->attributes['title']; ?>">
					<?php
					echo CMImage::image($video->attributes['code'], $video->attributes['title'], array(
						'timthumb' => array('w' => 250, 'h' => 200),
						'service' => $video->attributes['service']));
					?>
					</a>
					<h5><?php echo $video->attributes['title']; ?></h5>
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