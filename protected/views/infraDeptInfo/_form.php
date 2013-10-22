<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'infra-dept-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'dept_name'); ?>
		<?php echo $form->textField($model, 'dept_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'dept_name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('baseServiceInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'baseServiceInfos', GxHtml::encodeEx(GxHtml::listDataEx(BaseServiceInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('invGoodsRequests')); ?></label>
		<?php echo $form->checkBoxList($model, 'invGoodsRequests', GxHtml::encodeEx(GxHtml::listDataEx(InvGoodsRequest::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('roomServiceProvideds')); ?></label>
		<?php echo $form->checkBoxList($model, 'roomServiceProvideds', GxHtml::encodeEx(GxHtml::listDataEx(RoomServiceProvided::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->