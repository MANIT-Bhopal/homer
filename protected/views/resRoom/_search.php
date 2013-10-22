<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'res_id'); ?>
		<?php echo $form->textField($model, 'res_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'checkin_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'checkin_date',
			'value' => $model->checkin_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'checkin_time'); ?>
		<?php echo $form->textField($model, 'checkin_time', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'checkout_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'checkout_date',
			'value' => $model->checkout_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'checkout_time'); ?>
		<?php echo $form->textField($model, 'checkout_time', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nbr_adult'); ?>
		<?php echo $form->textField($model, 'nbr_adult', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nbr_child'); ?>
		<?php echo $form->textField($model, 'nbr_child', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nbr_infant'); ?>
		<?php echo $form->textField($model, 'nbr_infant', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payment_id'); ?>
		<?php echo $form->dropDownList($model, 'payment_id', GxHtml::listDataEx(ResAdvPayment::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'res_code'); ?>
		<?php echo $form->textField($model, 'res_code', array('maxlength' => 10)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
