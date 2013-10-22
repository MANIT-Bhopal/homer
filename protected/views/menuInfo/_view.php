<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('menu_info_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->menu_info_id), array('view', 'id' => $data->menu_info_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('menu_name')); ?>:
	<?php echo GxHtml::encode($data->menu_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->category)); ?>
	<br />

</div>