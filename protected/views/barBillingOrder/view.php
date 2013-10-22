<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->bar_billing_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->bar_billing_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'bar_billing_id',
array(
			'name' => 'table',
			'type' => 'raw',
			'value' => $model->table !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->table)), array('infraRestoTableInfo/view', 'id' => GxActiveRecord::extractPkValue($model->table, true))) : null,
			),
'billing_date',
array(
			'name' => 'roomNumber',
			'type' => 'raw',
			'value' => $model->roomNumber !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->roomNumber)), array('infraRoomInfo/view', 'id' => GxActiveRecord::extractPkValue($model->roomNumber, true))) : null,
			),
array(
			'name' => 'menuCard',
			'type' => 'raw',
			'value' => $model->menuCard !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->menuCard)), array('menuCardInfo/view', 'id' => GxActiveRecord::extractPkValue($model->menuCard, true))) : null,
			),
array(
			'name' => 'customer',
			'type' => 'raw',
			'value' => $model->customer !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->customer)), array('tableCustomerInfo/view', 'id' => GxActiveRecord::extractPkValue($model->customer, true))) : null,
			),
array(
			'name' => 'taxScheme',
			'type' => 'raw',
			'value' => $model->taxScheme !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->taxScheme)), array('finTaxSchemeInfo/view', 'id' => GxActiveRecord::extractPkValue($model->taxScheme, true))) : null,
			),
	),
)); ?>

