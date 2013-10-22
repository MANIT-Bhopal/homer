<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'bar-billing-order-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'table_id'); ?>
		<?php echo $form->dropDownList($model, 'table_id', GxHtml::listDataEx(InfraRestoTableInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'table_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'billing_date'); ?>
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
		<?php echo $form->error($model,'billing_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'room_number'); ?>
		<?php echo $form->dropDownList($model, 'room_number', GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true), 'room_number', 'room_number')); ?>
		<?php echo $form->error($model,'room_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'menu_card_id'); ?>
		<?php echo $form->dropDownList($model, 'menu_card_id', GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'menu_card_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tax_scheme_id'); ?>
		<?php echo $form->dropDownList($model, 'tax_scheme_id', GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tax_scheme_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->