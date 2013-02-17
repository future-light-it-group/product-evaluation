<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="main_content">
    <!-- breadcrumbs -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    )); ?><!-- breadcrumbs -->

    <?php endif?>

    <?php echo $content; ?>

</div>

<div class="sidebar">
    <?php include 'elements/sidebar.php';?>
</div><!-- sidebar -->
<?php $this->endContent(); ?>