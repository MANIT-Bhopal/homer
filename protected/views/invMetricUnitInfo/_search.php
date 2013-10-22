<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'unit_id'); ?>
		<?php echo $form->textField($model, 'unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'unit_code'); ?>
		<?php echo $form->textField($model, 'unit_code', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'unit_label'); ?>
		<?php echo $form->textField($model, 'unit_label', array('maxlength' => 20)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
