<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'fin-payment-mode-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'payment_mode_code'); ?>
		<?php echo $form->textField($model, 'payment_mode_code', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'payment_mode_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_mode_name'); ?>
		<?php echo $form->textField($model, 'payment_mode_name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'payment_mode_name'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->