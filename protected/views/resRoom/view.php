<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->res_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->res_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'res_id',
'checkin_date',
'checkin_time',
'checkout_date',
'checkout_time',
'nbr_adult',
'nbr_child',
'nbr_infant',
array(
			'name' => 'payment',
			'type' => 'raw',
			'value' => $model->payment !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->payment)), array('resAdvPayment/view', 'id' => GxActiveRecord::extractPkValue($model->payment, true))) : null,
			),
array(
			'name' => 'customer',
			'type' => 'raw',
			'value' => $model->customer !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->customer)), array('tableCustomerInfo/view', 'id' => GxActiveRecord::extractPkValue($model->customer, true))) : null,
			),
'res_code',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('resCheckIns')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->resCheckIns as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('resCheckIn/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('resCheckOuts')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->resCheckOuts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('resCheckOut/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('infraRoomInfos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->infraRoomInfos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('infraRoomInfo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>