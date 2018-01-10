<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$db_settings = array(
	'connectionString' => 'mysql:host=localhost;dbname=karate',
	'emulatePrepare' => true,
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	'enableProfiling'=>true,
	'enableParamLogging' => true,
);
$params = array(
		// this is used in contact page
		'adminEmail'=>'mk-mariko@yandex.ru',
		'postsPerPage' => 9
);

$log_settings = null;

if (file_exists(dirname(__FILE__).DIRECTORY_SEPARATOR.'/main.local.php')) {
	require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'/main.local.php';
}

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Каратэ',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'test118tyms',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		)		
	),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				'about' => 'site/about',
				'links' => 'site/links',
				'contact' => 'site/contact',	
				'contacts' => 'site/contacts',
				'books' => 'book',
				'page/<alias:\w+>'=>'page/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',				
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),		
		'db'=> $db_settings ,		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'format'=>array(
			'booleanFormat'=>array(Yii::t('mod','Нет'), Yii::t('app','Да')),
		),		
		'log'=> $log_settings,
	),
	'theme' => 'tw_narrow',
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=> $params,
);