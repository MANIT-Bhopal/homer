<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('bar_billing_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->bar_billing_id), array('view', 'id' => $data->bar_billing_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('table_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->table)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('billing_date')); ?>:
	<?php echo GxHtml::encode($data->billing_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('room_number')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->roomNumber)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('menu_card_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->menuCard)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('customer_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->customer)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tax_scheme_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->taxScheme)); ?>
	<br />

</div>