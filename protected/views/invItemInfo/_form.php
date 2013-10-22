<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-item-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model, 'item_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'item_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_type_id'); ?>
		<?php echo $form->dropDownList($model, 'item_type_id', GxHtml::listDataEx(InvItemTypeInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'item_type_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'unit_code'); ?>
		<?php echo $form->dropDownList($model, 'unit_code', GxHtml::listDataEx(InvMetricUnitInfo::model()->findAllAttributes(null, true),'unit_code','unit_code')); ?>
		<?php echo $form->error($model,'unit_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'opening_stock'); ?>
		<?php echo $form->textField($model, 'opening_stock'); ?>
		<?php echo $form->error($model,'opening_stock'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'max_qty'); ?>
		<?php echo $form->textField($model, 'max_qty'); ?>
		<?php echo $form->error($model,'max_qty'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'min_qty'); ?>
		<?php echo $form->textField($model, 'min_qty'); ?>
		<?php echo $form->error($model,'min_qty'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'std_qty'); ?>
		<?php echo $form->textField($model, 'std_qty'); ?>
		<?php echo $form->error($model,'std_qty'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'std_rate'); ?>
		<?php echo $form->textField($model, 'std_rate'); ?>
		<?php echo $form->error($model,'std_rate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'current_balance'); ?>
		<?php echo $form->textField($model, 'current_balance'); ?>
		<?php echo $form->error($model,'current_balance'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsRequests')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsRequests', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsRequest::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invPoInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invPoInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvPoInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invVendorInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invVendorInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvVendorInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->