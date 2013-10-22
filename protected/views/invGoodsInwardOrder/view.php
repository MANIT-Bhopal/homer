<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->in_order_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->in_order_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'in_order_id',
'inward_date',
array(
			'name' => 'po',
			'type' => 'raw',
			'value' => $model->po !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->po)), array('invPoInfo/view', 'id' => GxActiveRecord::extractPkValue($model->po, true))) : null,
			),
'item_name',
'vendor_name',
'quantity',
'rate',
'amount_value',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('invInwardGoodsPayables')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->invInwardGoodsPayables as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('invInwardGoodsPayable/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>