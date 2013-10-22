<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'res-check-in-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'come_from'); ?>
		<?php echo $form->textField($model, 'come_from', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'come_from'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'going_to'); ?>
		<?php echo $form->textField($model, 'going_to', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'going_to'); ?>
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