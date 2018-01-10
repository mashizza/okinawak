<?php

class BookController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

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
				'users'=>array('@'),
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
		$model=new Book;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Book']))
		{
			$model->attributes = $_POST['Book'];			
			$model->visible = $_POST['Book']['visible'];
			$model->sort_order = $_POST['Book']['sort_order'];
			$model->created = date("Y-m-d H:i:s");
						
			$rnd = time();
			$previewFile = CUploadedFile::getInstance($model,'preview_src');
			$previewFileName = "p{$rnd}-{$previewFile}";  // random number + file name
            $model->preview_src = $previewFileName;
			
			$uploadedFile = CUploadedFile::getInstance($model,'src');           
			$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->src = $fileName;
			
			if($model->save() && $uploadedFile)
			{			
				$uploadedFile->saveAs(Yii::app()->basePath.'/../documents/books/'.$fileName);
				$previewFile->saveAs(Yii::app()->basePath.'/../images/books/'.$previewFileName);
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

		if(isset($_POST['Book']))
		{			
			$_POST['Book']['src'] = $model->src;
			$_POST['Book']['preview_src'] = $model->preview_src;
			
            $model->attributes = $_POST['Book']; 
			$model->visible = $_POST['Book']['visible'];
			$model->sort_order = $_POST['Book']['sort_order'];
			$model->modified = date("Y-m-d H:i:s");			
			
			$rnd = time();
			$previewFile = CUploadedFile::getInstance($model,'preview_src');
			if(!empty($previewFile)) {
				$previewFileName = "p{$rnd}-{$previewFile}";  // random number + file name
				$model->preview_src = $previewFileName;
			}			
			
			$uploadedFile = CUploadedFile::getInstance($model,'src');           
			if(!empty($uploadedFile)) {
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
				$model->src = $fileName;
			}			
						
			if($model->save()) 
			{
				if(!empty($previewFile)) {
                    $previewFile->saveAs(Yii::app()->basePath.'/../images/books/'.$previewFileName);
                }
				if(!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../documents/books/'.$fileName);
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
		
		$filename = getcwd().'/images/books/'.$model->preview_src;
		if(file_exists($filename)){
			@unlink($filename);
		}
		
		$filename = getcwd().'/documents/books/'.$model->src;
		if(file_exists($filename)){
			@unlink($filename);
		}
		
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Book');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Book('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Book']))
			$model->attributes=$_GET['Book'];

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
		$model=Book::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='book-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}