<?php
/* @var $this ProductController */
/* @var $model Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>

    <img src="<?php echo CHtml::encode('upload/images/' . $data->image); ?>" alt="product-image">
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_price')); ?>:</b>
	<?php echo CHtml::encode($data->old_price); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origin')); ?>:</b>
	<?php echo CHtml::encode($data->origin); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
    <?php echo CHtml::encode($data->approved); ?>
    <br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_img')); ?>:</b>
	<?php echo CHtml::encode($data->resource_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_video')); ?>:</b>
	<?php echo CHtml::encode($data->resource_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_audio')); ?>:</b>
	<?php echo CHtml::encode($data->resource_audio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacture_id')); ?>:</b>
	<?php echo CHtml::encode($data->manufacture_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distributor_id')); ?>:</b>
	<?php echo CHtml::encode($data->distributor_id); ?>
	<br />

	*/ ?>

</div>
