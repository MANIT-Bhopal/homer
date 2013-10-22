<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-resto-table-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'table_number'); ?>
		<?php echo $form->textField($model, 'table_number', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'table_number'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nbr_of_chair'); ?>
		<?php echo $form->textField($model, 'nbr_of_chair'); ?>
		<?php echo $form->error($model,'nbr_of_chair'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'table_type_id'); ?>
		<?php echo $form->dropDownList($model, 'table_type_id', GxHtml::listDataEx(InfraRestoTableTypeInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'table_type_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('barBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'barBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(BarBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('restoBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'restoBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(RestoBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->