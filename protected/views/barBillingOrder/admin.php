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
	$.fn.yiiGridView.update('bar-billing-order-grid', {
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
	'id' => 'bar-billing-order-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'bar_billing_id',
		array(
				'name'=>'table_id',
				'value'=>'GxHtml::valueEx($data->table)',
				'filter'=>GxHtml::listDataEx(InfraRestoTableInfo::model()->findAllAttributes(null, true)),
				),
		'billing_date',
		array(
				'name'=>'room_number',
				'value'=>'GxHtml::valueEx($data->roomNumber)',
				'filter'=>GxHtml::listDataEx(InfraRoomInfo::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'menu_card_id',
				'value'=>'GxHtml::valueEx($data->menuCard)',
				'filter'=>GxHtml::listDataEx(MenuCardInfo::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'customer_id',
				'value'=>'GxHtml::valueEx($data->customer)',
				'filter'=>GxHtml::listDataEx(TableCustomerInfo::model()->findAllAttributes(null, true)),
				),
		/*
		array(
				'name'=>'tax_scheme_id',
				'value'=>'GxHtml::valueEx($data->taxScheme)',
				'filter'=>GxHtml::listDataEx(FinTaxSchemeInfo::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>