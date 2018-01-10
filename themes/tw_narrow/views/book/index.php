<?php
$this->pageTitle = Yii::app()->name . ' - Книги';
?>
<h1>Книги</h1>

<?php if(empty($model)): ?>
<p>К сожалению, книг пока нет.</p>
<?php else: ?>
<?php foreach ($model as $book): ?>		
<div class="media">	
	<?php if(!empty($book->attributes['preview_src'])):?>
	<a class="pull-left" href="<?php echo Yii::app()->baseUrl.'/books/view/' . $book->attributes['id']; ?>">
	  <?php echo CMImage::image( Yii::app()->baseUrl.'/images/books/' . $book->attributes['preview_src'], '', 
		array('timthumb' => array('w' => 80, 'h' => 80), 
			'alt' => $book->attributes['title'],
			'class' => 'media-object')); ?>
	</a>
	<?php endif; ?>
	<div class="media-body">
	  <h4 class="media-heading"><?php echo $book->attributes['title'];?></h4>
	  <p><?php echo $book->attributes['author'];?></p>
	  <div style="padding: 10px 0px;"><?php echo $book->attributes['description'];?></div>	  
	  <button type="button" class="btn btn-inverse right" onclick='javascript:document.location.href="<?php echo Yii::app()->baseUrl.'/books/download/' . $book->attributes['id']; ?>"'>Скачать</button>
	</div>
</div>	
<div class='clear'></div>
<br/>
<?php endforeach; ?>
	
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
