<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('checkin_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->checkin_id), array('view', 'id' => $data->checkin_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('come_from')); ?>:
	<?php echo GxHtml::encode($data->come_from); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('going_to')); ?>:
	<?php echo GxHtml::encode($data->going_to); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->res)); ?>
	<br />

</div>