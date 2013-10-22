<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->hotel_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->hotel_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'hotel_id',
'hotel_name',
'company_name',
'street_address',
'state_address',
'city',
array(
			'name' => 'countryCode',
			'type' => 'raw',
			'value' => $model->countryCode !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->countryCode)), array('country/view', 'id' => GxActiveRecord::extractPkValue($model->countryCode, true))) : null,
			),
'zip_code',
'phone_number',
'fax_number',
'email_address',
'site_url',
'reg_number',
'logo_url',
'hotel_chain_code',
'latitude',
'longitude',
	),
)); ?>

