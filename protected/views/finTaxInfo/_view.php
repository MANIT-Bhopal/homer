<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->tax_id), array('view', 'id' => $data->tax_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_name')); ?>:
	<?php echo GxHtml::encode($data->tax_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('charge_amount')); ?>:
	<?php echo GxHtml::encode($data->charge_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_live')); ?>:
	<?php echo GxHtml::encode($data->is_live); ?>
	<br />

</div>