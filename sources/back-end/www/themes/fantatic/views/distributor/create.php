<?php
/* @var $this DistributorController */
/* @var $model Distributor */

$this->breadcrumbs=array(
	'Distributors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Distributor', 'url'=>array('index')),
	array('label'=>'Manage Distributor', 'url'=>array('admin')),
);
?>

<h1>Create Distributor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>