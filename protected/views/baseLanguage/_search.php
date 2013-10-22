<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'language_id'); ?>
		<?php echo $form->textField($model, 'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lang_code'); ?>
		<?php echo $form->textField($model, 'lang_code', array('maxlength' => 2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'locale_id'); ?>
		<?php echo $form->textField($model, 'locale_id', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lang_label'); ?>
		<?php echo $form->textField($model, 'lang_label', array('maxlength' => 255)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
