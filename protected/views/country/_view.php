<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('country_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->country_id), array('view', 'id' => $data->country_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('country_code')); ?>:
	<?php echo GxHtml::encode($data->country_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country_name')); ?>:
	<?php echo GxHtml::encode($data->country_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country_code_iso3166')); ?>:
	<?php echo GxHtml::encode($data->country_code_iso3166); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lang_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->lang)); ?>
	<br />

</div>