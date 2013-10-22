<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('room_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->room_id), array('view', 'id' => $data->room_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('room_number')); ?>:
	<?php echo GxHtml::encode($data->room_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('adult_guest')); ?>:
	<?php echo GxHtml::encode($data->adult_guest); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('child_guest')); ?>:
	<?php echo GxHtml::encode($data->child_guest); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('infant_guest')); ?>:
	<?php echo GxHtml::encode($data->infant_guest); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('smoking_area')); ?>:
	<?php echo GxHtml::encode($data->smoking_area); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('room_type_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->roomType)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('floor_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->floor)); ?>
	<br />
	*/ ?>

</div>