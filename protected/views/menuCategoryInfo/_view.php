<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->category_id), array('view', 'id' => $data->category_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('category')); ?>:
	<?php echo GxHtml::encode($data->category); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('taxable')); ?>:
	<?php echo GxHtml::encode($data->taxable); ?>
	<br />

</div>