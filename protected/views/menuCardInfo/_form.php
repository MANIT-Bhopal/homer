<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'menu-card-info-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'menu_card_name'); ?>
		<?php echo $form->textField($model, 'menu_card_name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'menu_card_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model, 'quantity', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'quantity'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'unit_code'); ?>
		<?php echo $form->dropDownList($model, 'unit_code', GxHtml::listDataEx(InvMetricUnitInfo::model()->findAllAttributes(null, true),'unit_code','unit_code')); ?>
		<?php echo $form->error($model,'unit_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'price_amount'); ?>
		<?php echo $form->textField($model, 'price_amount', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'price_amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->dropDownList($model, 'currency_code', GxHtml::listDataEx(Currency::model()->findAllAttributes(null, true), 'currency_code', 'currency_code')); ?>
		<?php echo $form->error($model,'currency_code'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('barBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'barBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(BarBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('menuInfos')); ?></label>
		<?php echo $form->checkBoxList($model, 'menuInfos', GxHtml::encodeEx(GxHtml::listDataEx(MenuInfo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('restoBillingOrders')); ?></label>
		<?php echo $form->checkBoxList($model, 'restoBillingOrders', GxHtml::encodeEx(GxHtml::listDataEx(RestoBillingOrder::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->