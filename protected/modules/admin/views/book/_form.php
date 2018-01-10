<?php
/* @var $this BookController */
/* @var $model Book */
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

	<p class="note">Поля обозначенные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description', array('maxlength' => 300, 'rows' => 10, 'cols' => 50)); ?>	
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'src'); ?>
        <?php echo CHtml::activeFileField($model, 'src'); ?> 
        <?php echo $form->error($model,'src'); ?>
	</div>
	<?php if($model->isNewRecord!='1'): ?>
	<div class="row">
		<a href="<?php echo Yii::app()->baseUrl.'/documents/books/'.$model->src; ?>" target="_blank"><?php echo $model->title; ?></a>
	</div>
	<br/>
	<?php endif; ?>
	
	<div class="row">
        <?php echo $form->labelEx($model,'preview_src'); ?>
        <?php echo CHtml::activeFileField($model, 'preview_src'); ?> 
        <?php echo $form->error($model,'preview_src'); ?>
	</div>
	<?php if($model->isNewRecord!='1'): ?>
	<div class="row">
		<?php echo CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/books/'.$model->preview_src, "image"); ?>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<div class="clear"></div>
		<?php echo $form->radioButtonList($model,'visible',array('1'=>'Да','0'=>'Нет')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->