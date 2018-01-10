<?php

class AdminModule extends CWebModule
{
	public $homeUrl = '';
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		
		Yii::app()->theme = null; 
		
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
		
		$this->layout = '/layouts/main';
		
		$this->homeUrl = Yii::app()->getBaseUrl(TRUE).'/admin';
		
		$this->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'admin/default/error'),
            'user' => array(
                'class' => 'CWebUser',				
                'loginUrl'	=> Yii::app()->createUrl('/admin/default/login'),				
				'returnUrl' => Yii::app()->createUrl('/admin'),
            ),
			 'format'=>array(
				'booleanFormat'=>array(Yii::t('mod','Нет'), Yii::t('app','Да')),
			),			
			'request' => array(
				'baseUrl' => $this->homeUrl,
			),
        ));
 
		Yii::app()->user->setStateKeyPrefix('_admin');
	}

	public function beforeControllerAction($controller, $action)
	{		
		
		if(parent::beforeControllerAction($controller, $action))
		{
			$route = $controller->id . '/' . $action->id;
			$publicPages = array(
                'default/login',
                'default/error',
            );
            if (Yii::app()->user->isGuest && !in_array($route, $publicPages)){            
                Yii::app()->getModule('admin')->user->loginRequired();                
            }
			return true;
		}
		else
			return false;
	}
}
