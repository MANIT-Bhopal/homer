<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'item_id'); ?>
		<?php echo $form->textField($model, 'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'item_name'); ?>
		<?php echo $form->textField($model, 'item_name', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'item_type_id'); ?>
		<?php echo $form->dropDownList($model, 'item_type_id', GxHtml::listDataEx(InvItemTypeInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'unit_code'); ?>
		<?php echo $form->dropDownList($model, 'unit_code', GxHtml::listDataEx(InvMetricUnitInfo::model()->findAllAttributes(null, true),'unit_code','unit_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'opening_stock'); ?>
		<?php echo $form->textField($model, 'opening_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'max_qty'); ?>
		<?php echo $form->textField($model, 'max_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'min_qty'); ?>
		<?php echo $form->textField($model, 'min_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'std_qty'); ?>
		<?php echo $form->textField($model, 'std_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'std_rate'); ?>
		<?php echo $form->textField($model, 'std_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'current_balance'); ?>
		<?php echo $form->textField($model, 'current_balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
