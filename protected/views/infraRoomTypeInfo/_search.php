<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'room_type_id'); ?>
		<?php echo $form->textField($model, 'room_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'room_type'); ?>
		<?php echo $form->textField($model, 'room_type', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bed_size'); ?>
		<?php echo $form->textField($model, 'bed_size', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'charge_amount'); ?>
		<?php echo $form->textField($model, 'charge_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'handicap_support'); ?>
		<?php echo $form->checkBox($model, 'handicap_support', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'remarks'); ?>
		<?php echo $form->textArea($model, 'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
