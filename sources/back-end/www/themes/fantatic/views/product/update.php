<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'View Product', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);*/
?>
<!--essential javascript -->
<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.min.js'?>"></script>
<!-- first init image for view --->



<h1>Cập nhật sản phẩm <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
    $(document).ready(function(){
        //get image url from the file field
       var img_url = '<?php print($model->image)?>'
       //var default_img_url = '<?php print(Yii::app()->theme->baseUrl . '/img/no-image')?>'

    });
    if(img_url!='') {
        $('.thumbnail img').attr({
            src:'upload/images/'+  img_url
        });
    } /*else {
        $('.thumbnail img').attr({
            src: default_img_url
        });
    }*/
</script>