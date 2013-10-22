<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('room_service_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->room_service_id), array('view', 'id' => $data->room_service_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('customer_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->customer)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('room_number')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->roomNumber)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('service_date')); ?>:
	<?php echo GxHtml::encode($data->service_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('service_time')); ?>:
	<?php echo GxHtml::encode($data->service_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dept_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dept)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('service_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->service)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('service_desc')); ?>:
	<?php echo GxHtml::encode($data->service_desc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('other_service')); ?>:
	<?php echo GxHtml::encode($data->other_service); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('charges_amount')); ?>:
	<?php echo GxHtml::encode($data->charges_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('expected_completion_date')); ?>:
	<?php echo GxHtml::encode($data->expected_completion_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('expected_completion_time')); ?>:
	<?php echo GxHtml::encode($data->expected_completion_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	*/ ?>

</div>