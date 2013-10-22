<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'base-language-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'lang_code'); ?>
		<?php echo $form->textField($model, 'lang_code', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'lang_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'locale_id'); ?>
		<?php echo $form->textField($model, 'locale_id', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'locale_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lang_label'); ?>
		<?php echo $form->textField($model, 'lang_label', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'lang_label'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('countries')); ?></label>
		<?php echo $form->checkBoxList($model, 'countries', GxHtml::encodeEx(GxHtml::listDataEx(Country::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->