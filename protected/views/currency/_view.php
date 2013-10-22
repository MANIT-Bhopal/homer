<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('curr_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->curr_id), array('view', 'id' => $data->curr_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('currency_code')); ?>:
	<?php echo GxHtml::encode($data->currency_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numeric_code')); ?>:
	<?php echo GxHtml::encode($data->numeric_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_name')); ?>:
	<?php echo GxHtml::encode($data->currency_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('currency_symbol')); ?>:
	<?php echo GxHtml::encode($data->currency_symbol); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country_code')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->countryCode)); ?>
	<br />

</div>