<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inv-metric-unit-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'unit_code'); ?>
		<?php echo $form->textField($model, 'unit_code', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'unit_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'unit_label'); ?>
		<?php echo $form->textField($model, 'unit_label', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'unit_label'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('invItemInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'invItemInfos', GxHtml::encodeEx(GxHtml::listDataEx(InvItemInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('menuCardInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'menuCardInfos', GxHtml::encodeEx(GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->