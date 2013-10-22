<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'check_out_id'); ?>
		<?php echo $form->textField($model, 'check_out_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'amount_due'); ?>
		<?php echo $form->textField($model, 'amount_due', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'res_id'); ?>
		<?php echo $form->dropDownList($model, 'res_id', GxHtml::listDataEx(ResRoom::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
