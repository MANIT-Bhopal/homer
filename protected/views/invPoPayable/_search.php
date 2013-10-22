<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'po_payable_id'); ?>
		<?php echo $form->textField($model, 'po_payable_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tax_scheme_id'); ?>
		<?php echo $form->dropDownList($model, 'tax_scheme_id', GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'total_amount'); ?>
		<?php echo $form->textField($model, 'total_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'net_total_amount'); ?>
		<?php echo $form->textField($model, 'net_total_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bank_name'); ?>
		<?php echo $form->textField($model, 'bank_name', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payment_ref'); ?>
		<?php echo $form->textField($model, 'payment_ref', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'due_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payable_amount'); ?>
		<?php echo $form->textField($model, 'payable_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
