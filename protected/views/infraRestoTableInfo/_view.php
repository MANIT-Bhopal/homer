<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('table_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->table_id), array('view', 'id' => $data->table_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('table_number')); ?>:
	<?php echo GxHtml::encode($data->table_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nbr_of_chair')); ?>:
	<?php echo GxHtml::encode($data->nbr_of_chair); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('table_type_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tableType)); ?>
	<br />

</div>