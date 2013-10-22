<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('issue_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->issue_id), array('view', 'id' => $data->issue_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('issue_date')); ?>:
	<?php echo GxHtml::encode($data->issue_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('request_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->request)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dept_name')); ?>:
	<?php echo GxHtml::encode($data->dept_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_name')); ?>:
	<?php echo GxHtml::encode($data->item_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('quantity')); ?>:
	<?php echo GxHtml::encode($data->quantity); ?>
	<br />

</div>