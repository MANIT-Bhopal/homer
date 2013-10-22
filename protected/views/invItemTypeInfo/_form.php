<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-item-type-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'item_type_name'); ?>
		<?php echo $form->textField($model, 'item_type_name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'item_type_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ingredient'); ?>
		<?php echo $form->checkBox($model, 'ingredient', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'ingredient'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invItemInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invItemInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvItemInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->