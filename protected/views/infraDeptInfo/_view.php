<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('dept_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->dept_id), array('view', 'id' => $data->dept_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('dept_name')); ?>:
	<?php echo GxHtml::encode($data->dept_name); ?>
	<br />

</div>