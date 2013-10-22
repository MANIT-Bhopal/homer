<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'checkin_id'); ?>
		<?php echo $form->textField($model, 'checkin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'come_from'); ?>
		<?php echo $form->textField($model, 'come_from', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'going_to'); ?>
		<?php echo $form->textField($model, 'going_to', array('maxlength' => 10)); ?>
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
