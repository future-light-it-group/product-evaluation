<?php
/**
 * User: ${Cristazn}
 * Date: 2/11/13
 * Time: 11:34 AM
 * Email: crist.azn@gmail.com | Phone : 0963-500-980
 */

    // datatable -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datatables/jquery.dataTables.min.js');
    // additional sorting for datatables -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datatables/jquery.dataTables.sorting.js');
    // tables functions -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/gebo_tables.js');