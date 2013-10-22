<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-goods-inward-order-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'inward_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'inward_date',
			'value' => $model->inward_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'inward_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'po_id'); ?>
		<?php echo $form->dropDownList($model, 'po_id', GxHtml::listDataEx(InvPoInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'po_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model, 'item_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'item_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'vendor_name'); ?>
		<?php echo $form->textField($model, 'vendor_name', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'vendor_name'); ?>
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

		<label><?php echo GxHtml::encode($model->getRelationLabel('invInwardGoodsPayables')); ?></label>
		<?php echo $form->checkBoxList($model, 'invInwardGoodsPayables', GxHtml::encodeEx(GxHtml::listDataEx(InvInwardGoodsPayable::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->