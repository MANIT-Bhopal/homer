<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'tax_id'); ?>
		<?php echo $form->textField($model, 'tax_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tax_name'); ?>
		<?php echo $form->textField($model, 'tax_name', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'charge_amount'); ?>
		<?php echo $form->textField($model, 'charge_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_live'); ?>
		<?php echo $form->textField($model, 'is_live', array('maxlength' => 1)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
