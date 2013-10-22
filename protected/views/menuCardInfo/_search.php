<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'menu_card_id'); ?>
		<?php echo $form->textField($model, 'menu_card_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'menu_card_name'); ?>
		<?php echo $form->textField($model, 'menu_card_name', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'quantity'); ?>
		<?php echo $form->textField($model, 'quantity', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'unit_code'); ?>
		<?php echo $form->dropDownList($model, 'unit_code', GxHtml::listDataEx(InvMetricUnitInfo::model()->findAllAttributes(null, true),'unit_code','unit_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'price_amount'); ?>
		<?php echo $form->textField($model, 'price_amount', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code'), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
