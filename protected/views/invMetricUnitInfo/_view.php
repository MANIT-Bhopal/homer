<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('unit_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->unit_id), array('view', 'id' => $data->unit_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('unit_code')); ?>:
	<?php echo GxHtml::encode($data->unit_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('unit_label')); ?>:
	<?php echo GxHtml::encode($data->unit_label); ?>
	<br />

</div>