<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),*/
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','view','admin','delete','visible','deleteall','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        $file = CUploadedFile::getInstance($model,'image');
		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
            if(is_object($file) && get_class($file) === 'CUploadedFile') {  // check if the instaces of file is valid object
                $model->image = $file; //set file to image attribute of the model
                if($model->save()) {
                    if(is_object($model->image) && get_class($model->image) === 'CUploadedFile' ) {
                        // check again for make sure that in model attribute for valid

                        $model->image->saveAs(substr(Yii::getPathOfAlias('upload_img_dir'),1) . DIRECTORY_SEPARATOR. $file->name);
                    }
                    $this->redirect(array('view','id'=>$model->id));
                }

            } else {
                //image not define only save info
                if($model->save())
                    $this->redirect(array('view','id'=>$model->id));

            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);



		if(isset($_POST['Product']))
		{
            $old_image = $model->image;
			$model->attributes=$_POST['Product'];
            $model->setAttributes($_POST['Product']);  //set all attributes from the $_POST
            $file = CUploadedFile::getInstance($model,'image');

            if(is_object($file) && get_class($file) === 'CUploadedFile' )  {
                $model->image = $file;

            } else  {
                $model->image = $old_image;
            }
            if($model->save()) {
                if(is_object($model->image) && get_class($model->image) === 'CUploadedFile' )    {
                    //file image is write on db so we only need move this file from the tmp directory to upload directory

                    $model->image->saveAs(substr(Yii::getPathOfAlias('upload_img_dir'),1) . DIRECTORY_SEPARATOR. $model->image->name);
                    // remove if have the old image file

                    if(!empty($old_image)) {
                        unlink(substr(Yii::getPathOfAlias('upload_img_dir'),1) . DIRECTORY_SEPARATOR .  $old_image);
                    }
                }
                $this->redirect(array('view','id'=>$model->id));
            }

		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

		$model = $this->loadModel($id);

        //delete image
        $old_image = $model->image;
        if($model->delete()) {
            if(!empty($old_image)) {
                unlink(substr(Yii::getPathOfAlias('upload_img_dir'),1) . DIRECTORY_SEPARATOR .  $old_image);
            }
        }

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])) {
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));

        }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Product',array(
            'pagination'=>array('pageSize'=>4),
        ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		
		$model=Product::model()->findByPk($id);

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    public function actionVisible($id) {

        $result = false;
        if(is_numeric($id) && $id>0 ) {
            $product = $this->loadModel($id);
            if($product!=null) {
                if($product->approved == 0)
                    $product->approved = 1;
                else
                    $product->approved = 0;
                $product->save();

            }
        }
        if(!isset($_GET['ajax']))
            $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionDeleteall() {
       if(isset($_POST['cid'])) {
           $items = $_POST['cid'];
           foreach($items as $item) {
               //delete each item
               $model = $this->loadModel($item);
               $old_image = $model->image;
               //delete in database
               $model->delete();
               //unlink the image
               if(!empty($old_image)) {
                   unlink(substr(Yii::getPathOfAlias('upload_img_dir'),1) . DIRECTORY_SEPARATOR .  $old_image);
               }
           }

       }

    }

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
