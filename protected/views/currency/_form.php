<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'currency-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->textField($model, 'currency_code', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'currency_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numeric_code'); ?>
		<?php echo $form->textField($model, 'numeric_code', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'numeric_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_name'); ?>
		<?php echo $form->textField($model, 'currency_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'currency_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_symbol'); ?>
		<?php echo $form->textField($model, 'currency_symbol', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'currency_symbol'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country_code'); ?>	
		<?php echo $form->dropDownList($model, 'country_code', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true), 'country_code', 'country_code')); ?>
		<?php echo $form->error($model,'country_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('baseFacilityInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'baseFacilityInfos', GxHtml::encodeEx(GxHtml::listDataEx(BaseFacilityInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('baseServiceInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'baseServiceInfos', GxHtml::encodeEx(GxHtml::listDataEx(BaseServiceInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRoomTypeInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRoomTypeInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRoomTypeInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('menuCardInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'menuCardInfos', GxHtml::encodeEx(GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->