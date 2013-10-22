<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'bar_billing_id'); ?>
		<?php echo $form->textField($model, 'bar_billing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'table_id'); ?>
		<?php echo $form->dropDownList($model, 'table_id', GxHtml::listDataEx(InfraRestoTableInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'billing_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'billing_date',
			'value' => $model->billing_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'room_number'); ?>
		<?php echo $form->dropDownList($model, 'room_number', GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true), 'room_number', 'room_number'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'menu_card_id'); ?>
		<?php echo $form->dropDownList($model, 'menu_card_id', GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tax_scheme_id'); ?>
		<?php echo $form->dropDownList($model, 'tax_scheme_id', GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
