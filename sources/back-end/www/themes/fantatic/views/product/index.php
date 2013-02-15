<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Products',
);


?>

<h1>Danh sách sản phẩm</h1>
<a href="#" class="btn delete_rows_dt"><i class="icon-trash"></i>  Xóa tất cả</a>
<!--delete all button --->
<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'product-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass'=>'table table-bordered table-striped table_vam',
    'columns' => array(
        array(
            'name'=>'',
            'type'=>'raw',
            'value'=>'CHtml::checkBox("cid[]",false,array("value"=>"$data->id"))',
        ),
        'name',
        array(
            'name'=>'image',
            'type'=>'raw',
            'value'=>'CHtml::image(Yii::getPathOfAlias("upload_img_dir") . DIRECTORY_SEPARATOR . $data->image,"Đang cập nhật",array("width"=>"123","height"=>"123"))',

        ),
        'price',
        'old_price',
        'in_stock',
        'create_at',
        array(
            'name'=>'approved',
            'type'=>'raw',
            'value'=>'$data->getApproveText($data->approved)',
        ),

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
                    'click' => "js:function(){
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

<script>
    $(document).ready(function(){
        $('.delete_rows_dt').click(function(){
             //check input checkbox at least 1 check
             var checks = $('input[name="cid[]"]:checked').length;
             if(checks<1) {
                 alert('Xin chọn ít nhất 1 dòng để xóa!');
             } else {
                 //do ajax here to delete all selected
                 var checked_data = $('input[name="cid[]"]:checked').serialize();
                 jQuery.ajax({
                     url: "<?php print($this->createUrl('product/deleteall')) ?>",
                     type:"POST",
                     data:checked_data,
                     error: function(xhr,tStatus,e){
                         if(!xhr){
                             alert(" Có lỗi trong qúa trình  ");
                             alert(tStatus+"   "+e.message);
                         }else{
                             alert("else: "+e.message); // the great unknown
                         }
                     },

                     // success reponse
                     success: function(resData){
                          //update grid
                          $.fn.yiiGridView.update('product-grid');


                     }



                 })
             }

        });




    })
</script>