<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'hotel-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'hotel_name'); ?>
		<?php echo $form->textField($model, 'hotel_name', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'hotel_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model, 'company_name', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'company_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'street_address'); ?>
		<?php echo $form->textField($model, 'street_address', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'street_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'state_address'); ?>
		<?php echo $form->textField($model, 'state_address', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'state_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_code'); ?>
		<?php echo $form->dropDownList($model, 'country_code', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true), 'country_code', 'country_code')); ?>
		<?php echo $form->error($model,'country_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model, 'zip_code', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model, 'phone_number', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fax_number'); ?>
		<?php echo $form->textField($model, 'fax_number', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'fax_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model, 'email_address', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'email_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'site_url'); ?>
		<?php echo $form->textField($model, 'site_url', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'site_url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'reg_number'); ?>
		<?php echo $form->textField($model, 'reg_number', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'reg_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'logo_url'); ?>
		<?php echo $form->textField($model, 'logo_url', array('maxlength' => 500)); ?>
		<?php echo $form->error($model,'logo_url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hotel_chain_code'); ?>
		<?php echo $form->textField($model, 'hotel_chain_code', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'hotel_chain_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model, 'latitude', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'latitude'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model, 'longitude', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'longitude'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->