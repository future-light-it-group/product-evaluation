<?php
/* @var $this ArticleController */
/* @var $model Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
    <?php echo CHtml::encode($data->getUserText($data->user_id)); ?>
    <br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_desc')); ?>:</b>
	<?php echo CHtml::encode($data->short_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_desc')); ?>:</b>
	<?php echo CHtml::encode($data->full_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_at')); ?>:</b>
	<?php echo CHtml::encode($data->update_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_number')); ?>:</b>
	<?php echo CHtml::encode($data->view_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_img')); ?>:</b>
	<?php echo CHtml::encode($data->resource_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_audio')); ?>:</b>
	<?php echo CHtml::encode($data->resource_audio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_video')); ?>:</b>
	<?php echo CHtml::encode($data->resource_video); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('article_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->article_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	*/ ?>

</div>
