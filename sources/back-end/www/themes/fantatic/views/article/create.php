<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Create',
);

?>

<h3 class="heading">Tạo bài viết mới</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>