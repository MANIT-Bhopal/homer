<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('hotel_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->hotel_id), array('view', 'id' => $data->hotel_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('hotel_name')); ?>:
	<?php echo GxHtml::encode($data->hotel_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('company_name')); ?>:
	<?php echo GxHtml::encode($data->company_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('street_address')); ?>:
	<?php echo GxHtml::encode($data->street_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state_address')); ?>:
	<?php echo GxHtml::encode($data->state_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->countryCode)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('zip_code')); ?>:
	<?php echo GxHtml::encode($data->zip_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone_number')); ?>:
	<?php echo GxHtml::encode($data->phone_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fax_number')); ?>:
	<?php echo GxHtml::encode($data->fax_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email_address')); ?>:
	<?php echo GxHtml::encode($data->email_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('site_url')); ?>:
	<?php echo GxHtml::encode($data->site_url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reg_number')); ?>:
	<?php echo GxHtml::encode($data->reg_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('logo_url')); ?>:
	<?php echo GxHtml::encode($data->logo_url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hotel_chain_code')); ?>:
	<?php echo GxHtml::encode($data->hotel_chain_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('latitude')); ?>:
	<?php echo GxHtml::encode($data->latitude); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('longitude')); ?>:
	<?php echo GxHtml::encode($data->longitude); ?>
	<br />
	*/ ?>

</div>