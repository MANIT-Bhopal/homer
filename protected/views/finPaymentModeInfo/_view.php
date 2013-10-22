<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('payment_mode_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->payment_mode_id), array('view', 'id' => $data->payment_mode_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('payment_mode_code')); ?>:
	<?php echo GxHtml::encode($data->payment_mode_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_mode_name')); ?>:
	<?php echo GxHtml::encode($data->payment_mode_name); ?>
	<br />

</div>