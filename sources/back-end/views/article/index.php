<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);
?>

<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form-search-item').submit(function(){
	$('#article-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>


<h3 class="heading">Danh sách bài viết</h3>



<a href="#" class="btn delete_rows_dt"><i class="icon-trash"></i>  Xóa tất cả</a>
<!--delete all button --->

<div class="search-form">
    <?php $this->renderPartial('_search',array(
    'model'=>Article::model(),
)); ?>

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'article-grid',
    'dataProvider'=>$model->search(),
    'itemsCssClass'=>'table table-bordered table-striped table_vam',
    'columns'=>array(
        array(
            'name'=>'',
            'type'=>'raw',
            'value'=>'CHtml::checkBox("cid[]",false,array("value"=>"$data->id"))',
        ),
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

<script>

    $(document).ready(function(){
        $('.delete_rows_dt').click(function(){
            //check input checkbox at least 1 check
            var checks = $('input[name="cid[]"]:checked').length;
            if(checks<1) {
                alert('Xin chọn ít nhất 1 dòng để xóa!');
            } else {
                //do ajax here to delete all selected

                if(confirm("Bạn có muốn xóa các dòng dữ liệu này không ?")) {
                    var checked_data = $('input[name="cid[]"]:checked').serialize();
                    jQuery.ajax({
                        url: "<?php print($this->createUrl('article/deleteall')) ?>",
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
                            $.fn.yiiGridView.update('article-grid');
                        }
                    })
                }
            }
        });
    })
</script>
