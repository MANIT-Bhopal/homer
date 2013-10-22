<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('language_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->language_id), array('view', 'id' => $data->language_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('lang_code')); ?>:
	<?php echo GxHtml::encode($data->lang_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('locale_id')); ?>:
	<?php echo GxHtml::encode($data->locale_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lang_label')); ?>:
	<?php echo GxHtml::encode($data->lang_label); ?>
	<br />

</div>