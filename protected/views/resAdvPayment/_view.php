<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('payment_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->payment_id), array('view', 'id' => $data->payment_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('payment_date')); ?>:
	<?php echo GxHtml::encode($data->payment_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_time')); ?>:
	<?php echo GxHtml::encode($data->payment_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_mode_code')); ?>:
	<?php echo GxHtml::encode($data->payment_mode_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bank_name')); ?>:
	<?php echo GxHtml::encode($data->bank_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('amount_value')); ?>:
	<?php echo GxHtml::encode($data->amount_value); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_code')); ?>:
	<?php echo GxHtml::encode($data->payment_code); ?>
	<br />

</div>