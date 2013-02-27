<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);
?>
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
        array(
            'name'=>'approved',
            'type'=>'raw',
            'value'=>$model->getApproveText($model->approved),
        ),
        array(
            'name'=>'image',
            'type'=>'html',
            'value'=>CHtml::image(Yii::getPathOfAlias("image_public_dir") . DIRECTORY_SEPARATOR . $model->image,"Đang cập nhật",array("width"=>"123","height"=>"123")),

        ),

		'status',
		'resource_img',
		'resource_video',
		'resource_audio',
        array(
            'name'=>'product_category_id',
            'type'=>'raw',
            'value'=>$model->getProductCategoryText($model->product_category_id),
        ),
        array(
            'name'=>'manufacture_id',
            'type'=>'raw',
            'value'=>$model->getManufacturerText($model->manufacture_id),
        ),
        array(
            'name'=>'distributor_id',
            'type'=>'raw',
            'value'=>$model->getDistributorText($model->distributor_id),
        ),

	),
)); ?>
