<?php
/* @var $this DistributorController */
/* @var $model Distributor */

$this->breadcrumbs=array(
	'Distributors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Distributor', 'url'=>array('index')),
	array('label'=>'Create Distributor', 'url'=>array('create')),
	array('label'=>'Update Distributor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Distributor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Distributor', 'url'=>array('admin')),
);
?>

<h1>View Distributor # <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'email',
		'phone',
		'payment_id',
	),
)); ?>
