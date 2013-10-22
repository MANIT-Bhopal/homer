<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-room-type-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'room_type'); ?>
		<?php echo $form->textField($model, 'room_type', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'room_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bed_size'); ?>
		<?php echo $form->textField($model, 'bed_size', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'bed_size'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'charge_amount'); ?>
		<?php echo $form->textField($model, 'charge_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'charge_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'handicap_support'); ?>
		<?php echo $form->checkBox($model, 'handicap_support', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'handicap_support'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model, 'remarks'); ?>
		<?php echo $form->error($model,'remarks'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code')); ?>
		<?php echo $form->error($model,'currency_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRoomInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRoomInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('baseFacilityInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'baseFacilityInfos', GxHtml::encodeEx(GxHtml::listDataEx(BaseFacilityInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->