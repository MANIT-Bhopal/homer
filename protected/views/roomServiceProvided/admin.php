<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('room-service-provided-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'room-service-provided-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'room_service_id',
		array(
				'name'=>'customer_id',
				'value'=>'GxHtml::valueEx($data->customer)',
				'filter'=>GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'room_number',
				'value'=>'GxHtml::valueEx($data->roomNumber)',
				'filter'=>GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true)),
				),
		'service_date',
		'service_time',
		array(
				'name'=>'dept_id',
				'value'=>'GxHtml::valueEx($data->dept)',
				'filter'=>GxHtml::listDataEx(InfraDeptInfo::model()->findAllAttributes(null, true)),
				),
		/*
		array(
				'name'=>'service_id',
				'value'=>'GxHtml::valueEx($data->service)',
				'filter'=>GxHtml::listDataEx(BaseServiceInfo::model()->findAllAttributes(null, true)),
				),
		'service_desc',
		'other_service',
		'charges_amount',
		'expected_completion_date',
		'expected_completion_time',
		'status',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>