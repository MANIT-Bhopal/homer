<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-floor-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'floor_name'); ?>
		<?php echo $form->textField($model, 'floor_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'floor_name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('infraRoomInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'infraRoomInfos', GxHtml::encodeEx(GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->