<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('customer_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->customer_id), array('view', 'id' => $data->customer_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('customer_name')); ?>:
	<?php echo GxHtml::encode($data->customer_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('street_address')); ?>:
	<?php echo GxHtml::encode($data->street_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('zip_code')); ?>:
	<?php echo GxHtml::encode($data->zip_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state_address')); ?>:
	<?php echo GxHtml::encode($data->state_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->countryCode)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('phone_number')); ?>:
	<?php echo GxHtml::encode($data->phone_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('mobile_phone')); ?>:
	<?php echo GxHtml::encode($data->mobile_phone); ?>
	<br />
	*/ ?>

</div>