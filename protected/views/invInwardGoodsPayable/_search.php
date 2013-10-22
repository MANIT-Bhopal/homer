<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'in_payable_id'); ?>
		<?php echo $form->textField($model, 'in_payable_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tax_amount'); ?>
		<?php echo $form->textField($model, 'tax_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'discount'); ?>
		<?php echo $form->textField($model, 'discount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'total_amount'); ?>
		<?php echo $form->textField($model, 'total_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'net_total_amount'); ?>
		<?php echo $form->textField($model, 'net_total_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
