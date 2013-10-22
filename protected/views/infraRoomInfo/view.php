<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->room_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->room_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'room_id',
'room_number',
'adult_guest',
'child_guest',
'infant_guest',
'smoking_area',
array(
			'name' => 'roomType',
			'type' => 'raw',
			'value' => $model->roomType !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->roomType)), array('infraRoomTypeInfo/view', 'id' => GxActiveRecord::extractPkValue($model->roomType, true))) : null,
			),
array(
			'name' => 'floor',
			'type' => 'raw',
			'value' => $model->floor !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->floor)), array('infraFloorInfo/view', 'id' => GxActiveRecord::extractPkValue($model->floor, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('barBillingOrders')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->barBillingOrders as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('barBillingOrder/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('resRooms')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->resRooms as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('resRoom/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('restoBillingOrders')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->restoBillingOrders as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('restoBillingOrder/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('roomServiceProvideds')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->roomServiceProvideds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('roomServiceProvided/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>