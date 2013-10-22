<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-goods-issue-order-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'issue_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'issue_date',
			'value' => $model->issue_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'issue_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'request_id'); ?>
		<?php echo $form->dropDownList($model, 'request_id', GxHtml::listDataEx(InvGoodsRequest::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'request_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dept_name'); ?>
		<?php echo $form->textField($model, 'dept_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'dept_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model, 'item_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'item_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model, 'quantity', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'quantity'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsReceiveInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsReceiveInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsReceiveInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->