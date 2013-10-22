<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'fin-tax-scheme-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tax_scheme_name'); ?>
		<?php echo $form->textField($model, 'tax_scheme_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'tax_scheme_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'from_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'from_date',
			'value' => $model->from_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'from_date'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('barBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'barBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(BarBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('finTaxInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'finTaxInfos', GxHtml::encodeEx(GxHtml::listDataEx(FinTaxInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invPoPayables')); ?></label>
		<?php echo $form->checkBoxList($model, 'invPoPayables', GxHtml::encodeEx(GxHtml::listDataEx(InvPoPayable::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('restoBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'restoBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(RestoBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->