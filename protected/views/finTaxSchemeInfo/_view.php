<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_scheme_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->tax_scheme_id), array('view', 'id' => $data->tax_scheme_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tax_scheme_name')); ?>:
	<?php echo GxHtml::encode($data->tax_scheme_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('from_date')); ?>:
	<?php echo GxHtml::encode($data->from_date); ?>
	<br />

</div>