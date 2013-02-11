<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);
?>
<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.min.js'?>"></script>
<h1>Chi tiết sản phẩm <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'price',
		'old_price',
		'in_stock',
		'create_at',
		'origin',
		'warranty',
		'approved',
		'image',
		'status',
		'resource_img',
		'resource_video',
		'resource_audio',
		'product_category_id',
		'manufacture_id',
		'distributor_id',
	),
)); ?>
