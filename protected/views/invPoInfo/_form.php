<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-po-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'vendor_id'); ?>
		<?php echo $form->dropDownList($model, 'vendor_id', GxHtml::listDataEx(InvVendorInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'vendor_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model, 'item_id', GxHtml::listDataEx(InvItemInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'item_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'po_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'po_date',
			'value' => $model->po_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'po_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'po_time'); ?>
		<?php echo $form->textField($model, 'po_time', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'po_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model, 'quantity', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'quantity'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model, 'rate', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'rate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'amount_value'); ?>
		<?php echo $form->textField($model, 'amount_value', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'amount_value'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsInwardOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsInwardOrders', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsInwardOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invPoPayables')); ?></label>
		<?php echo $form->checkBoxList($model, 'invPoPayables', GxHtml::encodeEx(GxHtml::listDataEx(InvPoPayable::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->