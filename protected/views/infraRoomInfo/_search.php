<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'room_id'); ?>
		<?php echo $form->textField($model, 'room_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'room_number'); ?>
		<?php echo $form->textField($model, 'room_number', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'adult_guest'); ?>
		<?php echo $form->textField($model, 'adult_guest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'child_guest'); ?>
		<?php echo $form->textField($model, 'child_guest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'infant_guest'); ?>
		<?php echo $form->textField($model, 'infant_guest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'smoking_area'); ?>
		<?php echo $form->checkBox($model, 'smoking_area', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'room_type_id'); ?>
		<?php echo $form->dropDownList($model, 'room_type_id', GxHtml::listDataEx(InfraRoomTypeInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'floor_id'); ?>
		<?php echo $form->dropDownList($model, 'floor_id', GxHtml::listDataEx(InfraFloorInfo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
