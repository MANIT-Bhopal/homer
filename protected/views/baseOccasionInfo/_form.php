<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'base-occasion-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'occassion_name'); ?>
		<?php echo $form->textField($model, 'occassion_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'occassion_name'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->