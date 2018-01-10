<?php
/* @var $this PhotoAlbumController */
/* @var $model PhotoAlbum */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/msdropdown/jquery.dd.min.js'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/dd.css" />
<script language="javascript">
$(document).ready(function(e) {
	try {		
		$("#preview_photo_id").msDropDown();
		$("#preview_photo_id").data("dd");
	} catch(e) {
		alert(e.message);
	}
});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-album-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'parent_photo_album_id'); ?>
		<?php echo CHtml::dropDownList('PhotoAlbum[parent_photo_album_id]', $model->parent_photo_album_id, $albums, array('empty' => '(Выберите родительский альбом)'));; ?>
		<?php echo $form->error($model,'parent_photo_album_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'preview_photo_id'); ?>
		<select name="PhotoAlbum[preview_photo_id]" id="preview_photo_id" onchange="showValue(this)">
			<option value="empty">Select a preview</option>		
			
			<?php foreach($previews as $pr):?>
			<option value="<?php echo $pr->id;?>" data-image="<?php echo Yii::app()->baseUrl.'/timthumb.php?w=50&src='.Yii::app()->baseUrl.'/images/photos/'.$pr->attributes['src']?>"><?php echo $pr->attributes['title']; ?></option>
			<?php endforeach; ?>
		</select>
		<div class="clear"></div>
		<?php echo $form->error($model,'preview_photo_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<div class="clear"></div>
		<?php echo $form->radioButtonList($model,'visible',array('1'=>'Да','0'=>'Нет')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->