<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="hero-unit">
	<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
		<?php //echo CHtml::image('images/gallery/java.jpg', 'DORE'); ?>
	<p>Here could be an image background.</p>
	<p><a class="btn btn-primary btn-large">Learn more »</a></p>
</div>

<?php
$data = array();
foreach($model as $m){
	$data[] = $m->attributes;
}
$data = array_chunk($data, 3);
?>
<?php foreach($data as $row):?>
<div class="row-fluid">
	<?php foreach($row as $post):?>
	<div class="span4">
		<h2><?php echo $post['title']; ?></h2>
		<p><?php echo $post['short_message']; ?></p>
		<p>
			<?php echo CHtml::link('Далее', array('post/view', 'id'=> $post['id']), array('class' => 'btn')); ?>
		</p>
	</div><!--/span-->
	<?php endforeach; ?>
</div>
<?php endforeach; ?>

<div class="pagination pagination-small pagination-centered">
<?php
// the pagination widget with some options to mess
$this->widget('application.extensions.CMyPager', array(
	'currentPage'=> $pages->getCurrentPage(),
	'itemCount'=> $item_count,
	'pageSize'=> $page_size,
	'maxButtonCount'=>5,
	'nextPageLabel'=>'»',
	'prevPageLabel'=>'«',
	'showFirstLink'=>false,
	'showLastLink'=>false,
	'selectedPageCssClass' => 'active',
	'hiddenPageCssClass' => 'disabled',
	'header'=>'',
	'htmlOptions'=>array('class'=>''),
));
?>
</div>