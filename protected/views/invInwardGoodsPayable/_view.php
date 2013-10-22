<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('in_payable_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->in_payable_id), array('view', 'id' => $data->in_payable_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_amount')); ?>:
	<?php echo GxHtml::encode($data->tax_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('discount')); ?>:
	<?php echo GxHtml::encode($data->discount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_amount')); ?>:
	<?php echo GxHtml::encode($data->total_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('net_total_amount')); ?>:
	<?php echo GxHtml::encode($data->net_total_amount); ?>
	<br />

</div>