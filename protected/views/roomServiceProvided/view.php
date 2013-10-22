<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->room_service_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->room_service_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'room_service_id',
array(
			'name' => 'customer',
			'type' => 'raw',
			'value' => $model->customer !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->customer)), array('tableCustomerInfo/view', 'id' => GxActiveRecord::extractPkValue($model->customer, true))) : null,
			),
array(
			'name' => 'roomNumber',
			'type' => 'raw',
			'value' => $model->roomNumber !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->roomNumber)), array('infraRoomInfo/view', 'id' => GxActiveRecord::extractPkValue($model->roomNumber, true))) : null,
			),
'service_date',
'service_time',
array(
			'name' => 'dept',
			'type' => 'raw',
			'value' => $model->dept !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dept)), array('infraDeptInfo/view', 'id' => GxActiveRecord::extractPkValue($model->dept, true))) : null,
			),
array(
			'name' => 'service',
			'type' => 'raw',
			'value' => $model->service !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->service)), array('baseServiceInfo/view', 'id' => GxActiveRecord::extractPkValue($model->service, true))) : null,
			),
'service_desc',
'other_service',
'charges_amount',
'expected_completion_date',
'expected_completion_time',
'status',
	),
)); ?>

