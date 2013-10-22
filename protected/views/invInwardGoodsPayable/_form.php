<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-inward-goods-payable-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tax_amount'); ?>
		<?php echo $form->textField($model, 'tax_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'tax_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model, 'discount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'discount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'total_amount'); ?>
		<?php echo $form->textField($model, 'total_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'total_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'net_total_amount'); ?>
		<?php echo $form->textField($model, 'net_total_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'net_total_amount'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsInwardOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsInwardOrders', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsInwardOrder::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->