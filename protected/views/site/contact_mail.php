<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Контактная форма</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<style>
	.form-group {
		margin-bottom: 10px;
	}
</style>
<div class="form-horizontal" style="margin-left: 30px;">

<p>Если у Вас есть вопросы, пожалуйста, свяжитесь с нами. Спасибо.</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',	
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true		
	),
)); ?>

	<p class="note">Поля, обозначенные <span class="required">*</span>, обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	 <div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	 <div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	 <div class="form-group">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	 <div class="form-group">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	 <div class="form-group">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>		
		<?php $this->widget('CCaptcha'); ?><br/>
		<div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="buttons">		
		<?php echo CHtml::submitButton('Отправить', array('class' => 'btn btn-inverse')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>