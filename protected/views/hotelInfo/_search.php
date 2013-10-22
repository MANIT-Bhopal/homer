<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'hotel_id'); ?>
		<?php echo $form->textField($model, 'hotel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hotel_name'); ?>
		<?php echo $form->textField($model, 'hotel_name', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'company_name'); ?>
		<?php echo $form->textField($model, 'company_name', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'street_address'); ?>
		<?php echo $form->textField($model, 'street_address', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state_address'); ?>
		<?php echo $form->textField($model, 'state_address', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_code'); ?>
		<?php echo $form->dropDownList($model, 'country_code', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true), 'country_code', 'country_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zip_code'); ?>
		<?php echo $form->textField($model, 'zip_code', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone_number'); ?>
		<?php echo $form->textField($model, 'phone_number', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fax_number'); ?>
		<?php echo $form->textField($model, 'fax_number', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email_address'); ?>
		<?php echo $form->textField($model, 'email_address', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'site_url'); ?>
		<?php echo $form->textField($model, 'site_url', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'reg_number'); ?>
		<?php echo $form->textField($model, 'reg_number', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'logo_url'); ?>
		<?php echo $form->textField($model, 'logo_url', array('maxlength' => 500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hotel_chain_code'); ?>
		<?php echo $form->textField($model, 'hotel_chain_code', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'latitude'); ?>
		<?php echo $form->textField($model, 'latitude', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'longitude'); ?>
		<?php echo $form->textField($model, 'longitude', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
