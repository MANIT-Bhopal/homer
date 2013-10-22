<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->service_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->service_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'service_id',
'service_name',
'charges_amount',
array(
			'name' => 'currencyCode',
			'type' => 'raw',
			'value' => $model->currencyCode !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->currencyCode)), array('currency/view', 'id' => GxActiveRecord::extractPkValue($model->currencyCode, true))) : null,
			),
array(
			'name' => 'dept',
			'type' => 'raw',
			'value' => $model->dept !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dept)), array('infraDeptInfo/view', 'id' => GxActiveRecord::extractPkValue($model->dept, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('roomServiceProvideds')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->roomServiceProvideds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('roomServiceProvided/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>