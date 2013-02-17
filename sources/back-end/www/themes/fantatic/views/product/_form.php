<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="row-fluid">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'product-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data', //form type for upload image
    ),

)); ?>
    <div class="formSep">

    <p class="note">Các trường có dấu <span class="required">*</span> phải được điền đầy đủ thông tin.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row-fluid">

        <div class="span4">
            <div data-provides="fileupload" id="large-product-thumb" class="fileupload fileupload-new"><input
                    type="hidden">

                <div class="fileupload-new thumbnail">
                    <?php
                    if(empty($model->image)) {
                        echo CHtml::image(Yii::app()->theme->baseUrl . '/img/no-image');
                    }else {
                        echo CHtml::image(Yii::getPathOfAlias('upload_img_dir') . DIRECTORY_SEPARATOR . $model->image,'');
                    }

                    ?>
                </div>
                <div style="max-width: 200px; max-height: 150px; line-height: 0px;"
                     class="fileupload-preview fileupload-exists thumbnail"></div>
                <div>
                                <span class="btn btn-file"><span class="fileupload-new">Chọn ảnh</span><span
                                        class="fileupload-exists">Đổi hình</span><?php echo $form->fileField($model, 'image', array('size' => 35, 'class'=>'img_btn')); ?></span>
                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Xóa hình</a>
                </div>
            </div>
        </div>
        <?php echo $form->error($model, 'image'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'price'); ?>
        <?php echo $form->textField($model, 'price'); ?>
        <?php echo $form->error($model, 'price'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'old_price'); ?>
        <?php echo $form->textField($model, 'old_price'); ?>
        <?php echo $form->error($model, 'old_price'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'in_stock'); ?>
        <?php echo $form->textField($model, 'in_stock'); ?>
        <?php echo $form->error($model, 'in_stock'); ?>
    </div>

    <div class="row-fluid">

        <?php echo $form->labelEx($model, 'create_at'); ?>

            <div class="input-append date" id="dp2" data-date-format="yyyy-mm-dd">
                <?php echo $form->textField($model, 'create_at'); ?><span
                    class="add-on"><i
                    class="splashy-calendar_day"></i></span>
            </div>
        <?php echo $form->error($model, 'create_at'); ?>

    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'origin'); ?>
        <?php echo $form->textField($model, 'origin', array('size' => 30, 'maxlength' => 30)); ?>
        <?php echo $form->error($model, 'origin'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'warranty'); ?>
        <?php echo $form->textField($model, 'warranty', array('size' => 20, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'warranty'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'approved'); ?>
        <?php echo $form->dropDownList($model, 'approved',$model->getApproveOptions(),array('selected'=>($model->approved==1)?true:false)); ?>
        <?php echo $form->error($model, 'approved'); ?>
    </div>


    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->textField($model, 'status', array('size' => 20, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'resource_img'); ?>
        <?php echo $form->textField($model, 'resource_img', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'resource_img'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'resource_video'); ?>
        <?php echo $form->textField($model, 'resource_video', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'resource_video'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'resource_audio'); ?>
        <?php echo $form->textField($model, 'resource_audio', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'resource_audio'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'product_category_id'); ?>
        <?php echo $form->dropDownList($model, 'product_category_id', $model->getProductCategoryOptions()); ?>
        <?php echo $form->error($model, 'product_category_id'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'manufacture_id'); ?>
        <?php echo $form->dropDownList($model, 'manufacture_id', $model->getManufacturerOptions()); ?>
        <?php echo $form->error($model, 'manufacture_id'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'distributor_id'); ?>
        <?php echo $form->dropDownList($model, 'distributor_id', $model->getDistributorOptions()); ?>
        <?php echo $form->error($model, 'distributor_id'); ?>
    </div>

    <div class="row-fluid buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu'); ?>
        <?php echo CHtml::button('Xóa tất cả' ); ?>
    </div>

    <?php $this->endWidget(); ?>
    </div><!-- formSep -->
</div><!-- row-fluid -->