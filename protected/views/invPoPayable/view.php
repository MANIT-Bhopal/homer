<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->po_payable_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->po_payable_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'po_payable_id',
array(
			'name' => 'taxScheme',
			'type' => 'raw',
			'value' => $model->taxScheme !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->taxScheme)), array('finTaxSchemeInfo/view', 'id' => GxActiveRecord::extractPkValue($model->taxScheme, true))) : null,
			),
'total_amount',
'net_total_amount',
'bank_name',
'payment_ref',
'due_date',
'payable_amount',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('invPoInfos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->invPoInfos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('invPoInfo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>