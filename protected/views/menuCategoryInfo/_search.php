<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'category_id'); ?>
		<?php echo $form->textField($model, 'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'category'); ?>
		<?php echo $form->textField($model, 'category', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'taxable'); ?>
		<?php echo $form->checkBox($model, 'taxable', array('maxlength' => 1)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
