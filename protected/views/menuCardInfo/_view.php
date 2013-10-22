<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('menu_card_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->menu_card_id), array('view', 'id' => $data->menu_card_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('menu_card_name')); ?>:
	<?php echo GxHtml::encode($data->menu_card_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('quantity')); ?>:
	<?php echo GxHtml::encode($data->quantity); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('unit_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->unitCode)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('price_amount')); ?>:
	<?php echo GxHtml::encode($data->price_amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->currencyCode)); ?>
	<br />

</div>