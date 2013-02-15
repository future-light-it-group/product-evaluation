<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_desc'); ?>
		<?php echo $form->textArea($model,'short_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'short_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_desc'); ?>
		<?php echo $form->textArea($model,'full_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'full_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
		<?php echo $form->error($model,'create_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_at'); ?>
		<?php echo $form->textField($model,'update_at'); ?>
		<?php echo $form->error($model,'update_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_number'); ?>
		<?php echo $form->textField($model,'view_number'); ?>
		<?php echo $form->error($model,'view_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_img'); ?>
		<?php echo $form->textField($model,'resource_img',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'resource_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_audio'); ?>
		<?php echo $form->textField($model,'resource_audio',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'resource_audio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_video'); ?>
		<?php echo $form->textField($model,'resource_video',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'resource_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_category_id'); ?>
		<?php echo $form->textField($model,'article_category_id'); ?>
		<?php echo $form->error($model,'article_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->