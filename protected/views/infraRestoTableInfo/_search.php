<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'table_id'); ?>
		<?php echo $form->textField($model, 'table_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'table_number'); ?>
		<?php echo $form->textField($model, 'table_number', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nbr_of_chair'); ?>
		<?php echo $form->textField($model, 'nbr_of_chair'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'table_type_id'); ?>
		<?php echo $form->dropDownList($model, 'table_type_id', GxHtml::listDataEx(InfraRestoTableTypeInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
