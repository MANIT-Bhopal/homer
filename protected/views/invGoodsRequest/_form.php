<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-goods-request-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'request_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'request_date',
			'value' => $model->request_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'request_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'due_date',
			'value' => $model->due_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'due_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->dropDownList($model, 'dept_id', GxHtml::listDataEx(InfraDeptInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dept_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model, 'item_id', GxHtml::listDataEx(InvItemInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'item_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsIssueOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsIssueOrders', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsIssueOrder::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->