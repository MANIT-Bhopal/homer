<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('room_type_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->room_type_id), array('view', 'id' => $data->room_type_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('room_type')); ?>:
	<?php echo GxHtml::encode($data->room_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bed_size')); ?>:
	<?php echo GxHtml::encode($data->bed_size); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('charge_amount')); ?>:
	<?php echo GxHtml::encode($data->charge_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('handicap_support')); ?>:
	<?php echo GxHtml::encode($data->handicap_support); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('remarks')); ?>:
	<?php echo GxHtml::encode($data->remarks); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->currencyCode)); ?>
	<br />

</div>