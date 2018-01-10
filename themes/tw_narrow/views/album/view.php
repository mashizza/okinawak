<?php
/* @var $this InstructorController */

$this->pageTitle = Yii::app()->name . ' - '.$title;

$this->breadcrumbs = array('Галерея' => '/album', $title);
?>

<h1><?php echo $title; ?></h1>

<div class="albums">
	<?php $albums = array_chunk($albums, 4); ?>
	<?php foreach ($albums as $album): ?>
	<ul class="thumbnails">
		<?php foreach ($album as $al): ?>		
			<li class="span3">
				<div class="thumbnail">
				<a href="<?php echo Yii::app()->baseUrl.'/album/' . $al['id']; ?>"  title ="<?php echo $al['title']; ?>">
					<?php if(empty($al['preview'])): ?>
					<?php echo CMImage::image( Yii::app()->baseUrl.'/themes/tw_narrow/img/no-album-preview.png', '', 
							array('class' => 'no-album-preview')); ?>
					<?php else :?>
					<?php echo CMImage::image( Yii::app()->baseUrl.'/images/photos/' . $al['preview'], '', 
						array('timthumb' => array('w' => 260, 'h' => 180))); ?>
					<?php endif;?>
				</a>
				</div>
				<div class="caption">
					<h4><a href="<?php echo Yii::app()->baseUrl.'/album/' . $al['id']; ?>"><?php echo $al['title']; ?></a></h4>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="clear"></div>
	<?php endforeach; ?>
</div>
<div class="clear"></div>

<?php if(empty($photos)): ?>
<p>К сожатению фотографий тут нет.</p>
<?php else: ?>
<?php
$this->beginWidget('application.extensions.PrettyPhoto.PrettyPhoto', array(
	'id' => 'pretty_photo',
	'options' => array(
		'opacity' => 0.60,
		'modal' => true,
	),
));
?>
<?php $data = array_chunk($photos, 5); ?>
<?php foreach ($data as $row): ?>
	<ul class="thumbnails">
		<?php foreach ($row as $ph): ?>		
			<li class="span2">
				<div class="thumbnail">
				<a href="<?php echo Yii::app()->baseUrl.'/images/photos/' . $ph->attributes['src']; ?>" rel="prettyPhoto" title ="<?php echo $ph->attributes['title']; ?>">
					<?php echo CMImage::image( Yii::app()->baseUrl.'/images/photos/' . $ph->attributes['src'], '', 
						array('timthumb' => array('w' => 160, 'h' => 120))); ?>
				</a>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="clear"></div>
<?php endforeach; ?>
	
<?php $this->endWidget('application.extensions.PrettyPhoto.PrettyPhoto'); ?>
<div class="pagination pagination-small pagination-centered">
	<?php
// the pagination widget with some options to mess
	$this->widget('application.extensions.CMyPager', array(
		'currentPage' => $pages->getCurrentPage(),
		'itemCount' => $photos_count,
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