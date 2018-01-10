<?php
/* @var $this PhotoController */
/* @var $model Photo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'instructor-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'photo_album_id'); ?>
		<?php echo CHtml::dropDownList('Photo[photo_album_id]', $model->photo_album_id, $albums, array('empty' => '(Выберите альбом)'));; ?>
		<?php echo $form->error($model,'photo_album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'src'); ?>
        <?php echo CHtml::activeFileField($model, 'src'); ?> 
        <?php echo $form->error($model,'src'); ?>
	</div>
	<?php if($model->isNewRecord!='1'): ?>
	<div class="row">
		<?php echo CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/photos/'.$model->src, "image"); ?>
	</div>
	<?php endif; ?>
	
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
		<?php echo $form->textField($model,'sort_order'); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->