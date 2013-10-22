<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('po_payable_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->po_payable_id), array('view', 'id' => $data->po_payable_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_scheme_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->taxScheme)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('total_amount')); ?>:
	<?php echo GxHtml::encode($data->total_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('net_total_amount')); ?>:
	<?php echo GxHtml::encode($data->net_total_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bank_name')); ?>:
	<?php echo GxHtml::encode($data->bank_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_ref')); ?>:
	<?php echo GxHtml::encode($data->payment_ref); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('due_date')); ?>:
	<?php echo GxHtml::encode($data->due_date); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('payable_amount')); ?>:
	<?php echo GxHtml::encode($data->payable_amount); ?>
	<br />
	*/ ?>

</div>