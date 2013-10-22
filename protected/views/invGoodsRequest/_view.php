<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('request_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->request_id), array('view', 'id' => $data->request_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('request_date')); ?>:
	<?php echo GxHtml::encode($data->request_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('due_date')); ?>:
	<?php echo GxHtml::encode($data->due_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dept_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dept)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->item)); ?>
	<br />

</div>