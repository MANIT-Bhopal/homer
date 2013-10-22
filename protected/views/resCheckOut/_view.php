<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('check_out_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->check_out_id), array('view', 'id' => $data->check_out_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('amount_due')); ?>:
	<?php echo GxHtml::encode($data->amount_due); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->res)); ?>
	<br />

</div>