<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

?>
<!--essential javascript -->
<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.min.js'?>"></script>


<h1>Thêm mới sản phẩm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>