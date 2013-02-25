<?php
/* @var $this DistributorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Distributors',
);

$this->menu=array(
	array('label'=>'Create Distributor', 'url'=>array('create')),
	array('label'=>'Manage Distributor', 'url'=>array('admin')),
);
?>

<h1>Distributors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
