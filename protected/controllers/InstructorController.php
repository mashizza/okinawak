<?php

class InstructorController extends Controller
{
	public $layout='//layouts/column1';
		
	private $itemsPerPage = 6;

	public function filters()
	{
		return array();
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
	 * Lists all models.
	 */
	public function actionIndex()
	{				
		$criteria = new CDbCriteria();		
		$criteria->order = 'sort_order asc';	
		$criteria->condition = '`visible` = :visible';
		$criteria->params = array (	':visible' => 1	);

		$item_count = Instructor::model()->count($criteria);

		$pages = new CPagination($item_count);
		$pages->setPageSize($this->itemsPerPage);
		$pages->applyLimit($criteria);  // the trick is here!

		$this->render('index',array(
				'model'=> Instructor::model()->findAll($criteria), // must be the same as $item_count
				'item_count'=> $item_count,
				'page_size'=> $this->itemsPerPage,
				'pages'=> $pages,
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Instructor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested instructor does not exist.');
		return $model;
	}

}