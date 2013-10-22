<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'customer_id'); ?>
		<?php echo $form->textField($model, 'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'customer_name'); ?>
		<?php echo $form->textField($model, 'customer_name', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'street_address'); ?>
		<?php echo $form->textField($model, 'street_address', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zip_code'); ?>
		<?php echo $form->textField($model, 'zip_code', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state_address'); ?>
		<?php echo $form->textField($model, 'state_address', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_code'); ?>
		<?php echo $form->dropDownList($model, 'country_code', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true), 'country_code', 'country_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone_number'); ?>
		<?php echo $form->textField($model, 'phone_number', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mobile_phone'); ?>
		<?php echo $form->textField($model, 'mobile_phone', array('maxlength' => 20)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
