<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'payment_mode_id'); ?>
		<?php echo $form->textField($model, 'payment_mode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payment_mode_code'); ?>
		<?php echo $form->textField($model, 'payment_mode_code', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'payment_mode_name'); ?>
		<?php echo $form->textField($model, 'payment_mode_name', array('maxlength' => 20)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
