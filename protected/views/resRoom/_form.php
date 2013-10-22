<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'res-room-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'checkin_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'checkin_date',
			'value' => $model->checkin_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'checkin_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'checkin_time'); ?>
		<?php echo $form->textField($model, 'checkin_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'checkin_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'checkout_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'checkout_date',
			'value' => $model->checkout_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'checkout_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'checkout_time'); ?>
		<?php echo $form->textField($model, 'checkout_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'checkout_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nbr_adult'); ?>
		<?php echo $form->textField($model, 'nbr_adult', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'nbr_adult'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nbr_child'); ?>
		<?php echo $form->textField($model, 'nbr_child', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'nbr_child'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nbr_infant'); ?>
		<?php echo $form->textField($model, 'nbr_infant', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'nbr_infant'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_id'); ?>
		<?php echo $form->dropDownList($model, 'payment_id', GxHtml::listDataEx(ResAdvPayment::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'payment_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'res_code'); ?>
		<?php echo $form->textField($model, 'res_code', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'res_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('resCheckIns')); ?></label>
		<?php echo $form->checkBoxList($model, 'resCheckIns', GxHtml::encodeEx(GxHtml::listDataEx(ResCheckIn::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('resCheckOuts')); ?></label>
		<?php echo $form->checkBoxList($model, 'resCheckOuts', GxHtml::encodeEx(GxHtml::listDataEx(ResCheckOut::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRoomInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRoomInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->