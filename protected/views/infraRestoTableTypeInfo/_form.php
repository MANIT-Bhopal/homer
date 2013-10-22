<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-resto-table-type-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'table_type'); ?>
		<?php echo $form->textField($model, 'table_type', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'table_type'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRestoTableInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRestoTableInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRestoTableInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->