<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Products',
);


?>

<h1>Danh sách sản phẩm</h1>

<?php

//echo CHtml::image(CHtml::encode('upload/images/cpu-intel-1.jpeg'));
//exit;
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass'=>'table table-bordered table-striped table_vam',
    'columns' => array(

        'id',
        'name',
        array(
            'name'=>'image',
            'type'=>'html',
            'value'=>'ProductController::createFullImagePath($data->image)',

        ),
        'price',
        'old_price',
        'in_stock',
        'create_at',
        'approved',

        /*
        'origin',
        'warranty',
        'approved',
        'image',
        'status',
        'resource_img',
        'resource_video',
        'resource_audio',
        'product_category_id',
        'manufacture_id',
        'distributor_id',
        */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{visible}{delete}',
            'buttons' => array(
                'view' => array(
                    'label' => '',
                    'options' => array('class' => 'icon-tasks','title'=>'View detail of this product'),
                    'imageUrl' => '/img/glyphicons-halflings.png',

                ),
                'update' => array(
                    'label' => '',
                    'options' => array('class' => 'icon-pencil','title'=>'Edit this product'),
                    'imageUrl' => '/img/glyphicons-halflings.png',

                ),
                'visible' => array(
                    'label' => '',
                    'url' => 'Yii::app()->createUrl("/product/visible", array("id"=>$data->id))',
                    'options' => array('class' => 'icon-eye-open', 'title' => 'Enable/Disable visible this product'),
                    'imageUrl' => '/img/glyphicons-halflings.png',
                    'click' => "function(){
                                        var url = $(this).attr('href');
                                    $.fn.yiiGridView.update('product-grid', {  //change my-grid to your grid's name
                                        type:'POST',
                                        url:$(this).attr('href'),
                                        success:function(data) {
                                          $.fn.yiiGridView.update('product-grid'); //change my-grid to your grid's name
                                        }
                                    })
                                    return false;
                                  }
                                ",
                ),
                'delete' => array(
                    'label' => '',
                    'options' => array('class' => 'icon-trash','title'=>'Delete this product'),
                    'imageUrl' => '/img/glyphicons-halflings.png',

                )
            ),
        ),
    ),
)); ?>
