<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'src'); ?>		
		<?php echo $form->textField($model,'src',array('size'=>60,'maxlength'=>255)); ?>
		(Youtube or Vimeo links supported)
		<?php echo $form->error($model,'src'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>		
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
		(Comma separated)
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<div class="clear"></div>
		<?php echo $form->radioButtonList($model,'visible',array('1'=>'Да','0'=>'Нет')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=> 2,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->