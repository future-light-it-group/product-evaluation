<?php
/**
 * User: ${Cristazn}
 * Date: 2/12/13
 * Time: 2:58 AM
 * Email: crist.azn@gmail.com | Phone : 0963-500-980
 */

    // external-script -->
    // validation -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/validation/jquery.validate.min.js');
    // validation functions -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/gebo_validation.js');
    // masked inputs -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/forms/jquery.inputmask.min.js');
    // autosize textareas -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/forms/jquery.autosize.min.js');
    // textarea limiter/counter -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/forms/jquery.counter.min.js');
    // datepicker -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datepicker/bootstrap-datepicker.min.js');
    // timepicker -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/datepicker/bootstrap-timepicker.min.js');
    // tag handler -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/tag_handler/jquery.taghandler.min.js');
    // input spinners -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/forms/jquery.spinners.min.js');
    // styled form elements -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/uniform/jquery.uniform.min.js');
    // animated progressbars -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/forms/jquery.progressbar.anim.js');
    // multiselect -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/multiselect/js/jquery.multi-select.min.js');
    // enhanced select (chosen) -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/chosen/chosen.jquery.min.js');
    // TinyMce WYSIWG editor -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/tiny_mce/jquery.tinymce.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/tiny_mce/tiny_mce.js');
    // plupload and all it's runtimes and the jQuery queue widget (attachments) -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/plupload/js/plupload.full.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js');
    // colorpicker -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/colorpicker/bootstrap-colorpicker.js');
    // password strength checker -->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/lib/complexify/jquery.complexify.min.js');
    //gebo-form-->
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl .'/js/gebo_forms.js');