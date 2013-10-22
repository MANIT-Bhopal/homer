<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'room-service-provided-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'room_number'); ?>
		<?php echo $form->dropDownList($model, 'room_number', GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true), 'room_number', 'room_number')); ?>
		<?php echo $form->error($model,'room_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'service_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'service_date',
			'value' => $model->service_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'service_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'service_time'); ?>
		<?php echo $form->textField($model, 'service_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'service_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->dropDownList($model, 'dept_id', GxHtml::listDataEx(InfraDeptInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dept_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'service_id'); ?>
		<?php echo $form->dropDownList($model, 'service_id', GxHtml::listDataEx(BaseServiceInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'service_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'service_desc'); ?>
		<?php echo $form->textArea($model, 'service_desc'); ?>
		<?php echo $form->error($model,'service_desc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'other_service'); ?>
		<?php echo $form->textArea($model, 'other_service'); ?>
		<?php echo $form->error($model,'other_service'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'charges_amount'); ?>
		<?php echo $form->textField($model, 'charges_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'charges_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'expected_completion_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'expected_completion_date',
			'value' => $model->expected_completion_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'expected_completion_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'expected_completion_time'); ?>
		<?php echo $form->textField($model, 'expected_completion_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'expected_completion_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->