<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('receive_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->receive_id), array('view', 'id' => $data->receive_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('receive_date')); ?>:
	<?php echo GxHtml::encode($data->receive_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dept_name')); ?>:
	<?php echo GxHtml::encode($data->dept_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('issue_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->issue)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('item_name')); ?>:
	<?php echo GxHtml::encode($data->item_name); ?>
	<br />

</div>