<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'item_type_id'); ?>
		<?php echo $form->textField($model, 'item_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'item_type_name'); ?>
		<?php echo $form->textField($model, 'item_type_name', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ingredient'); ?>
		<?php echo $form->checkBox($model, 'ingredient', array('maxlength' => 1)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
