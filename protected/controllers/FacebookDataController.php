<?php

class FacebookDataController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model = new FacebookData;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FacebookData']))
		{
			$model->attributes = $_POST['FacebookData'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idfacebook_data));
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

		if(isset($_POST['FacebookData']))
		{
			$model->attributes=$_POST['FacebookData'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idfacebook_data));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('FacebookData');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FacebookData('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FacebookData']))
			$model->attributes=$_GET['FacebookData'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    
    /**
     * Displays the contact page
     */
    public function actionFire()
    {
//        $model = new FacebookData;
//        if(isset($_POST['params'])) {
//
//            $model->attributes = $_POST['params'];
//            if($model->validate())
//            {
//                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//                $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//                $headers="From: $name <{$model->email}>\r\n".
//                    "Reply-To: {$model->email}\r\n".
//                    "MIME-Version: 1.0\r\n".
//                    "Content-Type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//                $this->refresh();
//            }
//        }
//        $this->render('contact',array('model'=>$model));
        return "Lorem";
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FacebookData the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FacebookData::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FacebookData $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='facebook-data-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
