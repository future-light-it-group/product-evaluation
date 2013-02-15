<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="en"/>
    <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');
    ?>
    <?php
        include'basic-style.php';
         if($this->getUniqueId() == 'product') {
             if($this->action->getId() == 'update') {
                 include 'custom-css/form-css.php';
             }
         }


    ?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php include 'style-switcher.php' ?>

<div id="maincontainer" class="clearfix">
    <!-- header -->
    <?php include 'header.php'?>

    <!-- main content -->
    <div id="contentwrapper">
        <a class="sidebar_switch ttip_r on_switch" href="javascript:void(0)"
           aria-describedby="ui-tooltip-3">Sidebar switch</a>

        <div class="main_content">


            <!-- breadcrumbs -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            )); ?><!-- breadcrumbs -->

            <?php endif?>
            <?php //include'breadcumb.php'?>

            <!-- content -->
            <?php echo $content; ?>

            <div class="clear"></div>
            <!--- end content --->

            <!-- sidebar -->
            <?php include 'sidebar.php'?>
            <?php include 'basic-script.php' ?>

            <!--external script-->
            <?php
            if ($this->getUniqueId() == 'site') {
                include 'custom-scripts/dashboard.php';
            }
            if($this->getUniqueId() == 'product') {           // or Yii::app()->controller->id
                if($this->action->getId() == 'index') {       // or  Yii::app()->controller->action->id
                    include 'custom-scripts/datatable.php';
                }

                if($this->action->getId() != 'index') {

                    include 'custom-scripts/form.php';

                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
