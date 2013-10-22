<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'house-keeping-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'room_number'); ?>
		<?php echo $form->dropDownList($model, 'room_number', GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true), 'room_number', 'room_number')); ?>
		<?php echo $form->error($model,'room_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'type_of_work'); ?>
		<?php echo $form->textArea($model, 'type_of_work'); ?>
		<?php echo $form->error($model,'type_of_work'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'assign_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'assign_date',
			'value' => $model->assign_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'assign_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'assign_time'); ?>
		<?php echo $form->textField($model, 'assign_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'assign_time'); ?>
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
		<?php echo $form->dropDownList($model, 'status', HouseKeeping::getStatusList(), array('empty' => 'Select one')); ?>
		
		<?php //echo $form->textField($model, 'status', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->