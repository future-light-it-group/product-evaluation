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
        include'elements/basic-style.php';

             if($this->action->getId() == 'update' || $this->action->getId() == 'create') {
                 include 'custom-css/form-css.php';
             }

    ?>
    <script type="text/javascript">
        tinyMCE.init({
            mode : "textareas"
        });
    </script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="ptrn_a">

<?php //include 'elements/style-switcher.php' ?>

<div id="maincontainer" class="clearfix">
    <!-- header -->
    <?php include 'elements/header.php'?>
     <!-- end header -->

    <!-- main content -->
    <div id="contentwrapper">
        <a class="sidebar_switch ttip_r on_switch" href="javascript:void(0)"
           aria-describedby="ui-tooltip-3">Sidebar switch</a>

            <?php //include 'elements/breadcumb.php'?>

            <!-- content -->
            <?php echo $content; ?>

            <div class="clear"></div>
            <!--- end content --->

            <?php include 'elements/basic-script.php' ?>

            <!--external script-->
            <?php
            if ($this->getUniqueId() == 'site') {
                include 'custom-scripts/dashboard.php';
            }

            // or Yii::app()->controller->id
            // or  Yii::app()->controller->action->id
            switch($this->action->getId()) {
                case 'index':{
                    include 'custom-scripts/datatable.php';
                }
                default: {
                    include 'custom-scripts/form.php';
                }
            }

            ?>

    </div>
</div>
</body>
</html>
