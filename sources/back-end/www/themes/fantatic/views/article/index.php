<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);
?>

<h3 class="heading">Danh sách bài viết</h3>

<a href="#" class="btn delete_rows_dt"><i class="icon-trash"></i>  Xóa tất cả</a>
<!--delete all button --->
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'article-grid',
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>'table table-bordered table-striped table_vam',
    'columns'=>array(
        'id',
        'title',
        'article_category_id',
        'create_at',
        'view_number',
        'approved',
        'user_id',
        array(
            'class' => 'CButtonColumn'
        )

    ),


)); ?>
