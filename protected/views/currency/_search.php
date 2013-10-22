<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<!--  
	<div class="row">
		<?php // echo $form->label($model, 'curr_id'); ?>
		<?php //echo $form->textField($model, 'curr_id'); ?>
	</div>
-->
		
	<div class="row">
		<?php echo $form->label($model, 'currency_code'); ?>
		<?php echo $form->textField($model, 'currency_code', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'numeric_code'); ?>
		<?php echo $form->textField($model, 'numeric_code', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'currency_name'); ?>
		<?php echo $form->textField($model, 'currency_name', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'currency_symbol'); ?>
		<?php echo $form->textField($model, 'currency_symbol', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country_code'); ?>
		<?php echo $form->dropDownList($model, 'country_code', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true), 'country_code', 'country_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
