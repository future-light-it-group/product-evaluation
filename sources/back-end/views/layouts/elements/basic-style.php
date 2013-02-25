<?php
    //Bootstrap framework -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/bootstrap/bootstrap.min.css');
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/bootstrap/bootstrap-responsive.min.css');
    // gebo blue theme-->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/css/blue.css');
    // breadcrumbs-->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/jBreadcrumbs/css/BreadCrumb.css');
    // tooltips-->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/qtip2/jquery.qtip.min.css');
    // notifications -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/sticky/sticky.css');
    // colorbox -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/colorbox/colorbox.css');
    // code prettify -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/google-code-prettify/prettify.css');
    // notifications -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/sticky/sticky.css');
    // splashy icons -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/img/splashy/splashy.css');
    // flags -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/img/flags/flags.css');
    // calendar -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/lib/fullcalendar/fullcalendar_gebo.css');
    // splashy icons -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/img/splashy/splashy.css');
    // main styles -->
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css');
    Yii::app()->clientScript->registerCssFile("http://fonts.googleapis.com/css?family=PT+Sans");

    $browser = Yii::app()->browser->getBrowser();
    $version = Yii::app()->browser->getVersion();
    if($browser=='Internet Explorer' && $version < 8) {
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/css/ie.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/ie/html5.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/ie/respond.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl .  '/lib/flot/excanvas.min.js');
    }



?>

