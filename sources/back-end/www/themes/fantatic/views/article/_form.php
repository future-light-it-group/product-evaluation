<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>




<div class="row-fluid">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'article-form',
    'enableAjaxValidation'=>false,
)); ?>

    <div class="formSep">

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model,'article_category_id'); ?>

            <?php echo $form->dropDownList($model,'article_category_id',$model->getArticleCategoryOptions(),array('class'=>'uni_style'))?>

            <?php echo $form->error($model,'article_category_id'); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <?php echo $form->labelEx($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'title'); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12 title_span">
        <?php echo $form->labelEx($model,'short_desc'); ?>

        <?php echo $form->textArea($model,'short_desc',array('rows'=>5, 'cols'=>50)); ?>
        <?php echo $form->error($model,'short_desc'); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12 content_span">
            <?php echo $form->labelEx($model,'full_desc'); ?>
            <?php echo $form->textArea($model,'full_desc',array('rows'=>15, 'cols'=>50)); ?>
            <?php echo $form->error($model,'full_desc'); ?>
        </div>
    </div>

    <div class="row-fluid">

        <div class="span4">
            <label><span class="error_placement">Trạng thái</span> <span
                    class="f_req">*</span></label>
            <label class="radio inline">
                <input type="radio" value="option6" name="status"/>
                Kích hoạt
            </label>
            <label class="radio inline">
                <input type="radio" value="option7" name="status"/>
                Hủy bỏ
            </label>
        </div>
    </div>

    <div class="row-fluid">
        <?php //echo $form->labelEx($model,'approved'); ?>
        <?php //echo $form->textField($model,'approved'); ?>
        <?php //echo $form->error($model,'approved'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model,'resource_img'); ?>
        <?php echo $form->textField($model,'resource_img',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'resource_img'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model,'resource_audio'); ?>
        <?php echo $form->textField($model,'resource_audio',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'resource_audio'); ?>
    </div>

    <div class="row-fluid">
        <?php echo $form->labelEx($model,'resource_video'); ?>
        <?php echo $form->textField($model,'resource_video',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'resource_video'); ?>
    </div>

    <div class="row-fluid buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu'); ?>
    </div>

    <?php $this->endWidget(); ?>
    </div><!-- formSep -->
</div><!-- row-fluid -->