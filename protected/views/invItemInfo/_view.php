<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->item_id), array('view', 'id' => $data->item_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('item_name')); ?>:
	<?php echo GxHtml::encode($data->item_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_type_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->itemType)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('unit_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->unitCode)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('opening_stock')); ?>:
	<?php echo GxHtml::encode($data->opening_stock); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('max_qty')); ?>:
	<?php echo GxHtml::encode($data->max_qty); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('min_qty')); ?>:
	<?php echo GxHtml::encode($data->min_qty); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('std_qty')); ?>:
	<?php echo GxHtml::encode($data->std_qty); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('std_rate')); ?>:
	<?php echo GxHtml::encode($data->std_rate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('current_balance')); ?>:
	<?php echo GxHtml::encode($data->current_balance); ?>
	<br />
	*/ ?>

</div>