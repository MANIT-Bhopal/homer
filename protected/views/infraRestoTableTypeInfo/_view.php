<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('table_type_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->table_type_id), array('view', 'id' => $data->table_type_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('table_type')); ?>:
	<?php echo GxHtml::encode($data->table_type); ?>
	<br />

</div>