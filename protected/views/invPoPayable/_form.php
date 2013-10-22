<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-po-payable-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tax_scheme_id'); ?>
		<?php echo $form->dropDownList($model, 'tax_scheme_id', GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tax_scheme_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'total_amount'); ?>
		<?php echo $form->textField($model, 'total_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'total_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'net_total_amount'); ?>
		<?php echo $form->textField($model, 'net_total_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'net_total_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model, 'bank_name', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_ref'); ?>
		<?php echo $form->textField($model, 'payment_ref', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'payment_ref'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'due_date',
			'value' => $model->due_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'due_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payable_amount'); ?>
		<?php echo $form->textField($model, 'payable_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'payable_amount'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invPoInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invPoInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvPoInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->