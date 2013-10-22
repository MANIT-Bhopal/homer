<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'fin-tax-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tax_name'); ?>
		<?php echo $form->textField($model, 'tax_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'tax_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'charge_amount'); ?>
		<?php echo $form->textField($model, 'charge_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'charge_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'is_live'); ?>
		<?php echo $form->checkBox($model, 'is_live', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'is_live'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('finTaxSchemeInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'finTaxSchemeInfos', GxHtml::encodeEx(GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->