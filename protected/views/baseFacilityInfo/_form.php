<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'base-facility-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'facility_name'); ?>
		<?php echo $form->textField($model, 'facility_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'facility_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'charge_amount'); ?>
		<?php echo $form->textField($model, 'charge_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'charge_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code')); ?>
		<?php echo $form->error($model,'currency_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRoomTypeInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRoomTypeInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRoomTypeInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->