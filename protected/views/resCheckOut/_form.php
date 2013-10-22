<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'res-check-out-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'amount_due'); ?>
		<?php echo $form->textField($model, 'amount_due', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'amount_due'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'res_id'); ?>
		<?php echo $form->dropDownList($model, 'res_id', GxHtml::listDataEx(ResRoom::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'res_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->