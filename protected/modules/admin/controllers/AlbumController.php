<?php

class AlbumController extends Controller
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
			array('allow',  // allow admin user to perform all' actions
				'actions'=>array('index','view','create','update', 'admin','delete'),
				'users'=>array('admin'),
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
		$model=new PhotoAlbum;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PhotoAlbum']))
		{			
			$model->attributes=$_POST['PhotoAlbum'];
			$model->created = date("Y-m-d H:i:s");
			$model->modified = date("Y-m-d H:i:s");
			//TODO: check this
			$model->parent_photo_album_id = $_POST['PhotoAlbum']['parent_photo_album_id'];		
			$model->preview_photo_id = $_POST['PhotoAlbum']['preview_photo_id'];		
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		
		$albums = PhotoAlbum::model()->findAll(array(
			'order' => 'sort_order'));
		
		$previews = Photo::model()->findAll(array('order' =>'sort_order'));		
		$this->render('create',array(
			'model' => $model,
			'albums' => CHtml::listData($albums, 'id', 'title'),		
			'previews' => $previews
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

		if(isset($_POST['PhotoAlbum']))
		{
			$model->attributes=$_POST['PhotoAlbum'];	
			$model->modified = date("Y-m-d H:i:s");		
			$model->parent_photo_album_id = $_POST['PhotoAlbum']['parent_photo_album_id'];		
			$model->preview_photo_id = $_POST['PhotoAlbum']['preview_photo_id'];		
			$model->visible = $_POST['PhotoAlbum']['visible'];
			$model->sort_order = $_POST['PhotoAlbum']['sort_order'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$albums = PhotoAlbum::model()->findAll(array(
			'order' =>'sort_order', 
			'condition' => 'id <> :x', 
			'params' => array(':x' => $id)));
		
		$previews = Photo::model()->findAll(array('order' =>'sort_order'));		
		$this->render('update',array(
			'model'=>$model,
			'albums' => CHtml::listData($albums, 'id', 'title'),
			'previews' => $previews,
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
		$dataProvider=new CActiveDataProvider('PhotoAlbum');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PhotoAlbum('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PhotoAlbum']))
			$model->attributes=$_GET['PhotoAlbum'];

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
		$model=PhotoAlbum::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='photo-album-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
