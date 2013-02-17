<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

?>


<h3 class="heading">Thêm mới sản phẩm</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>