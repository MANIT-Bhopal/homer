<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('entry_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->entry_id), array('view', 'id' => $data->entry_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('room_number')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->roomNumber)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type_of_work')); ?>:
	<?php echo GxHtml::encode($data->type_of_work); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('assign_date')); ?>:
	<?php echo GxHtml::encode($data->assign_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('assign_time')); ?>:
	<?php echo GxHtml::encode($data->assign_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('expected_completion_date')); ?>:
	<?php echo GxHtml::encode($data->expected_completion_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('expected_completion_time')); ?>:
	<?php echo GxHtml::encode($data->expected_completion_time); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	*/ ?>

</div>