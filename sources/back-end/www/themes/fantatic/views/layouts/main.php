<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <?php include'basic-style.php'?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php include 'style-switcher.php' ?>

<div id="maincontainer" class="clearfix">
    <!-- header -->
    <?php include 'header.php'?>

    <!-- main content -->
    <div id="contentwrapper">
        <a class="sidebar_switch ttip_r on_switch" href="javascript:void(0)" oldtitle="Hide Sidebar"
           aria-describedby="ui-tooltip-3">Sidebar switch</a>

        <div class="main_content">


            <!-- breadcrumbs -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            )); ?><!-- breadcrumbs -->

            <?php endif?>
            <?php //include'breadcumb.php'?>

            <!--- content --->
            <?php echo $content; ?>

            <div class="clear"></div>
            <!--- end content --->

            <!-- sidebar -->
            <?php include 'sidebar.php'?>
            <?php include 'basic-script.php' ?>

            <!--external script--->
            <?php
            if ($this->getUniqueId() == 'site') {
                include 'custom-scripts/dashboard.php';
            }

            ?>
        </div>
    </div>
</div>
</body>
</html>
