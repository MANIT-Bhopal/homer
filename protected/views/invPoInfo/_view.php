<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('po_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->po_id), array('view', 'id' => $data->po_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('vendor_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->vendor)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->item)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('po_date')); ?>:
	<?php echo GxHtml::encode($data->po_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('po_time')); ?>:
	<?php echo GxHtml::encode($data->po_time); ?>
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