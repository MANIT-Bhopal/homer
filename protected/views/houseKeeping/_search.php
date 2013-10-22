<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'entry_id'); ?>
		<?php echo $form->textField($model, 'entry_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'room_number'); ?>
		<?php echo $form->dropDownList($model, 'room_number', GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true), 'room_number', 'room_number'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type_of_work'); ?>
		<?php echo $form->textArea($model, 'type_of_work'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'assign_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'assign_time'); ?>
		<?php echo $form->textField($model, 'assign_time', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'expected_completion_date'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'expected_completion_time'); ?>
		<?php echo $form->textField($model, 'expected_completion_time', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status', array('maxlength' => 2)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
