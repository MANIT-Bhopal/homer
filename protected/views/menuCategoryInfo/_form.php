<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'menu-category-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model, 'category', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'category'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'taxable'); ?>
		<?php echo $form->checkBox($model, 'taxable', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'taxable'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('menuInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'menuInfos', GxHtml::encodeEx(GxHtml::listDataEx(MenuInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->