<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-room-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'room_number'); ?>
		<?php echo $form->textField($model, 'room_number', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'room_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'adult_guest'); ?>
		<?php echo $form->textField($model, 'adult_guest'); ?>
		<?php echo $form->error($model,'adult_guest'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'child_guest'); ?>
		<?php echo $form->textField($model, 'child_guest'); ?>
		<?php echo $form->error($model,'child_guest'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'infant_guest'); ?>
		<?php echo $form->textField($model, 'infant_guest'); ?>
		<?php echo $form->error($model,'infant_guest'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'smoking_area'); ?>
		<?php echo $form->checkBox($model, 'smoking_area', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'smoking_area'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'room_type_id'); ?>
		<?php echo $form->dropDownList($model, 'room_type_id', GxHtml::listDataEx(InfraRoomTypeInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'room_type_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'floor_id'); ?>
		<?php echo $form->dropDownList($model, 'floor_id', GxHtml::listDataEx(InfraFloorInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'floor_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('barBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'barBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(BarBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resRooms')); ?></label>
		<?php echo $form->checkBoxList($model, 'resRooms', GxHtml::encodeEx(GxHtml::listDataEx(ResRoom::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('restoBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'restoBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(RestoBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('roomServiceProvideds')); ?></label>
		<?php echo $form->checkBoxList($model, 'roomServiceProvideds', GxHtml::encodeEx(GxHtml::listDataEx(RoomServiceProvided::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->