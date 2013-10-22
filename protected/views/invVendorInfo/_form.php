<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-vendor-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'vendor_name'); ?>
		<?php echo $form->textField($model, 'vendor_name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'vendor_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'street_address'); ?>
		<?php echo $form->textField($model, 'street_address', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'street_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'state_address'); ?>
		<?php echo $form->textField($model, 'state_address', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'state_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_code'); ?>
		<?php echo $form->textField($model, 'country_code', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'country_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model, 'zip_code', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model, 'phone_number', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'mobile_phone'); ?>
		<?php echo $form->textField($model, 'mobile_phone', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'mobile_phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'contact_name'); ?>
		<?php echo $form->textField($model, 'contact_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'contact_name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invPoInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invPoInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvPoInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invItemInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invItemInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvItemInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->