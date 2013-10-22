<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('facility_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->facility_id), array('view', 'id' => $data->facility_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('facility_name')); ?>:
	<?php echo GxHtml::encode($data->facility_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('charge_amount')); ?>:
	<?php echo GxHtml::encode($data->charge_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->currencyCode)); ?>
	<br />

</div>