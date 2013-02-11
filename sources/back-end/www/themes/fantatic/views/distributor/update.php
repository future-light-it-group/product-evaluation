<?php
/* @var $this DistributorController */
/* @var $model Distributor */

$this->breadcrumbs=array(
	'Distributors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Distributor', 'url'=>array('index')),
	array('label'=>'Create Distributor', 'url'=>array('create')),
	array('label'=>'View Distributor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Distributor', 'url'=>array('admin')),
);
?>

<h1>Update Distributor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>