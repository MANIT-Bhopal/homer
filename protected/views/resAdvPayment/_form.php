<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'res-adv-payment-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'payment_date',
			'value' => $model->payment_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'payment_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_time'); ?>
		<?php echo $form->textField($model, 'payment_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'payment_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_mode_code'); ?>
		<?php echo $form->textField($model, 'payment_mode_code', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'payment_mode_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model, 'bank_name', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'amount_value'); ?>
		<?php echo $form->textField($model, 'amount_value', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'amount_value'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_code'); ?>
		<?php echo $form->textField($model, 'payment_code', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'payment_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('resRooms')); ?></label>
		<?php echo $form->checkBoxList($model, 'resRooms', GxHtml::encodeEx(GxHtml::listDataEx(ResRoom::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->