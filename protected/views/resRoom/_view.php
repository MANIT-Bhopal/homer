<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->res_id), array('view', 'id' => $data->res_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('checkin_date')); ?>:
	<?php echo GxHtml::encode($data->checkin_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('checkin_time')); ?>:
	<?php echo GxHtml::encode($data->checkin_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('checkout_date')); ?>:
	<?php echo GxHtml::encode($data->checkout_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('checkout_time')); ?>:
	<?php echo GxHtml::encode($data->checkout_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nbr_adult')); ?>:
	<?php echo GxHtml::encode($data->nbr_adult); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nbr_child')); ?>:
	<?php echo GxHtml::encode($data->nbr_child); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('nbr_infant')); ?>:
	<?php echo GxHtml::encode($data->nbr_infant); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->payment)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('customer_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->customer)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('res_code')); ?>:
	<?php echo GxHtml::encode($data->res_code); ?>
	<br />
	*/ ?>

</div>