<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'menu-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'menu_name'); ?>
		<?php echo $form->textField($model, 'menu_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'menu_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', GxHtml::listDataEx(MenuCategoryInfo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'category_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('menuCardInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'menuCardInfos', GxHtml::encodeEx(GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->