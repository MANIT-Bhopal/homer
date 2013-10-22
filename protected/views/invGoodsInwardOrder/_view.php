<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('in_order_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->in_order_id), array('view', 'id' => $data->in_order_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('inward_date')); ?>:
	<?php echo GxHtml::encode($data->inward_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('po_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->po)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_name')); ?>:
	<?php echo GxHtml::encode($data->item_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('vendor_name')); ?>:
	<?php echo GxHtml::encode($data->vendor_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('quantity')); ?>:
	<?php echo GxHtml::encode($data->quantity); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rate')); ?>:
	<?php echo GxHtml::encode($data->rate); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('amount_value')); ?>:
	<?php echo GxHtml::encode($data->amount_value); ?>
	<br />
	*/ ?>

</div>