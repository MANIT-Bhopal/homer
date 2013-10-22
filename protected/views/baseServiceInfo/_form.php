<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'base-service-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'service_name'); ?>
		<?php echo $form->textField($model, 'service_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'service_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'charges_amount'); ?>
		<?php echo $form->textField($model, 'charges_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'charges_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code')); ?>
		<?php echo $form->error($model,'currency_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->dropDownList($model, 'dept_id', GxHtml::listDataEx(InfraDeptInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dept_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('roomServiceProvideds')); ?></label>
		<?php echo $form->checkBoxList($model, 'roomServiceProvideds', GxHtml::encodeEx(GxHtml::listDataEx(RoomServiceProvided::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->