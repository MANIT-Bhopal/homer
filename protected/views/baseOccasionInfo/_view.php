<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('occassion_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->occassion_id), array('view', 'id' => $data->occassion_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('occassion_name')); ?>:
	<?php echo GxHtml::encode($data->occassion_name); ?>
	<br />

</div>