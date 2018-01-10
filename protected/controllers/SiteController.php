<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{		
		/*$criteria = new CDbCriteria();		
		$criteria->order = 'created DESC';	
		$criteria->condition = '`visible` = :visible';
		$criteria->params = array (	':visible' => 1	);

		$item_count = Post::model()->count($criteria);

		$pages = new CPagination($item_count);
		$pages->setPageSize(Yii::app()->params['postsPerPage']);
		$pages->applyLimit($criteria);  // the trick is here!

		$this->render('index',array(
						'model'=> Post::model()->findAll($criteria), // must be the same as $item_count
				'item_count'=> $item_count,
				'page_size'=> Yii::app()->params['postsPerPage'],
				'pages'=> $pages,
		));*/
		$this->render('home');
	}
	
	public function actionAbout()
	{
		$page = Page::model()->find("alias = 'about'");	
				
		$this->render('/page/index', array('page_data' => $page));
	}
	
	public function actionLinks()
	{
		$page = Page::model()->find("alias = 'links'");	
		
		$this->render('/page/index', array('page_data' => $page));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContacts()
	{
		$page = Page::model()->find("alias = 'contacts'");	
		
		$this->render('/page/index', array('page_data' => $page));
	}
	
	public function actionContact_Mail()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact_mail',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->layout="admin";
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->getModule('admin')->homeUrl);
	}
}