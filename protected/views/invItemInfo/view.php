<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->item_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->item_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'item_id',
'item_name',
array(
			'name' => 'itemType',
			'type' => 'raw',
			'value' => $model->itemType !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->itemType)), array('invItemTypeInfo/view', 'id' => GxActiveRecord::extractPkValue($model->itemType, true))) : null,
			),
array(
			'name' => 'unitCode',
			'type' => 'raw',
			'value' => $model->unitCode !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->unitCode)), array('invMetricUnitInfo/view', 'id' => GxActiveRecord::extractPkValue($model->unitCode, true))) : null,
			),
'opening_stock',
'max_qty',
'min_qty',
'std_qty',
'std_rate',
'current_balance',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('invGoodsRequests')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->invGoodsRequests as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('invGoodsRequest/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('invPoInfos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->invPoInfos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('invPoInfo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('invVendorInfos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->invVendorInfos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('invVendorInfo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>