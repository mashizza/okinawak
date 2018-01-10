<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
?>

<div class="row-fluid">
	<?php if (Yii::app()->user->hasFlash('contact')): ?>
		<div class="alert alert-success">	
			<?php echo Yii::app()->user->getFlash('contact'); ?>
		</div>
	<?php else: ?>

		<p>Если у Вас есть вопросы, пожалуйста, свяжитесь с нами. Спасибо.</p>

		<div class="form">
			<?php
			$form = $this->beginWidget('CActiveForm', array(
				'id' => 'contact-form',
				'enableClientValidation' => true,
				'clientOptions' => array(
					'validateOnSubmit' => true,
				),
			));
			?>

			<p class="note">Поля, обозначенные <span class="required">*</span>, обязательны для заполнения.</p>			

			<?php echo $form->errorSummary($model); ?>

			<div>
				<?php echo $form->labelEx($model, 'Имя'); ?>
				<?php echo $form->textField($model, 'name'); ?>
				<?php echo $form->error($model, 'name'); ?>
			</div>

			<div>
				<?php echo $form->labelEx($model, 'Электронный адрес'); ?>
				<?php echo $form->textField($model, 'email'); ?>
				<?php echo $form->error($model, 'email'); ?>
			</div>

			<div>
				<?php echo $form->labelEx($model, 'Тема'); ?>
				<?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
				<?php echo $form->error($model, 'subject'); ?>
			</div>

			<div>
				<?php echo $form->labelEx($model, 'Сообщение'); ?>
				<?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
				<?php echo $form->error($model, 'body'); ?>
			</div>

			<?php if (CCaptcha::checkRequirements()): ?>
				<div>
					<?php echo $form->labelEx($model, 'verifyCode'); ?>
					<div>
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model, 'verifyCode'); ?>
					</div>
					<div class="hint">Пожалуйста, введите быквы, которые Вы видите на картинке выше.
						<br/>Буквы не регистрозависимы.</div>
					<?php echo $form->error($model, 'verifyCode'); ?>
				</div><br/>
			<?php endif; ?>

			<p>
				<?php echo CHtml::submitButton('Send', array('class' => 'btn btn-primary')); ?>
			</p>

			<?php $this->endWidget(); ?>

		</div><!-- form -->

	<?php endif; ?>
</div>