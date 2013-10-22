<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('service_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->service_id), array('view', 'id' => $data->service_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('service_name')); ?>:
	<?php echo GxHtml::encode($data->service_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('charges_amount')); ?>:
	<?php echo GxHtml::encode($data->charges_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->currencyCode)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dept_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dept)); ?>
	<br />

</div>