<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'country-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'country_code'); ?>
		<?php echo $form->textField($model, 'country_code', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'country_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_name'); ?>
		<?php echo $form->textField($model, 'country_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'country_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_code_iso3166'); ?>
		<?php echo $form->textField($model, 'country_code_iso3166', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'country_code_iso3166'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lang_id'); ?>
		<?php echo $form->dropDownList($model, 'lang_id', GxHtml::listDataEx(BaseLanguage::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'lang_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('currencies')); ?></label>
		<?php echo $form->checkBoxList($model, 'currencies', GxHtml::encodeEx(GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('hotelInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'hotelInfos', GxHtml::encodeEx(GxHtml::listDataEx(HotelInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tableCustomerInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'tableCustomerInfos', GxHtml::encodeEx(GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->