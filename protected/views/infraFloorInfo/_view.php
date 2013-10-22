<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('floor_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->floor_id), array('view', 'id' => $data->floor_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('floor_name')); ?>:
	<?php echo GxHtml::encode($data->floor_name); ?>
	<br />

</div>