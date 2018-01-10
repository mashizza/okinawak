<?php
/* @var $this InstructorController */
/* @var $model Instructor */
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
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rang'); ?>
		<?php echo $form->textField($model,'rang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rang'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<div class="clear"></div>
		<?php echo $form->radioButtonList($model,'visible',array('1'=>'Да','0'=>'Нет')); ?>
	</div>
	
	<div class="row">
        <?php echo $form->labelEx($model,'photo'); ?>
        <?php echo CHtml::activeFileField($model, 'photo'); ?> 
        <?php echo $form->error($model,'photo'); ?>
	</div>
	<?php if($model->isNewRecord!='1'): ?>
	<div class="row">
		<?php echo CHtml::image(Yii::app()->baseUrl.'/timthumb.php?w=100&src='.Yii::app()->baseUrl.'/images/instructors/'.$model->photo, "image"); ?>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'description',
			'language'=>'ru',
			'editorTemplate'=>'basic',
			'height' => '100px'
			)); 
		?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->