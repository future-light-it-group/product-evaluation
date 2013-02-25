<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>


<div class="form-search-item">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'post',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'title',array('class'=>'findlabel')); ?>
        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'class'=>'findtext')); ?>

    </div>
    <div class="buttons find">
        <?php echo CHtml::submitButton('Tìm',array('class'=>'btnfind')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
<div class="row-fluid"></div>