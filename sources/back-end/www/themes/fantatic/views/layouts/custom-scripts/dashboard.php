<?php 
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/gebo_dashboard.js');
    // small charts -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.peity.min.js');
    // charts -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/flot/jquery.flot.min.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/flot/jquery.flot.resize.min.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/flot/jquery.flot.pie.min.js');
    // datatable -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datatables/jquery.dataTables.min.js');
    // additional sorting for datatables -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datatables/jquery.dataTables.sorting.js');
    // tables functions -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/gebo_tables.js');