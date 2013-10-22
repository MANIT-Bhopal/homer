<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'country_id'); ?>
		<?php echo $form->textField($model, 'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_code'); ?>
		<?php echo $form->textField($model, 'country_code', array('maxlength' => 2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_name'); ?>
		<?php echo $form->textField($model, 'country_name', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_code_iso3166'); ?>
		<?php echo $form->textField($model, 'country_code_iso3166', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lang_id'); ?>
		<?php echo $form->dropDownList($model, 'lang_id', GxHtml::listDataEx(BaseLanguage::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
