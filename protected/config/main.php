<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Hotel Management Evaluation and Review (HOMER)',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
	    'application.modules.user.models.*',
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', // giix components
        //'ext.fileimagebehavior.*'

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/**	'user' => array(
			'debug' => true,
			),
		*/
		'user' => array(
			'debug' => false,
			'userTable' => 'user',
			'translationTable' => 'translation',
			//'baseLayout'  => 'application.views.layouts.main',
            //'layout'        => 'application.views.layouts.column2',//tried 'column2'
            //'loginLayout' => 'application.modules.user.views.layouts.yum',
            //'adminLayout' => 'application.modules.user.views.layouts.yum',
            'passwordRequirements' => array(                                        
					'minLen' => 4,
					'maxLen' => 16,
					'maxRepetition' => 2,
					'minDigits' => 3,
            ),

		),
		'usergroup' => array(
			'usergroupTable' => 'usergroup',
			'usergroupMessagesTable' => 'user_group_message',
		),
		/** 'membership' => array(
			'membershipTable' => 'membership',
			'paymentTable' => 'payment',
		),
		'friendship' => array(
			'friendshipTable' => 'friendship',
		),*/
		'profile' => array(
			'privacySettingTable' => 'privacysetting',
			'profileFieldTable' => 'profile_field',
			'profileTable' => 'profile',
			'profileCommentTable' => 'profile_comment',
			'profileVisitTable' => 'profile_visit',
		),
		'role' => array(
			'roleTable' => 'role',
			'userRoleTable' => 'user_role',
			'actionTable' => 'action',
			'permissionTable' => 'permission',
		),
			/**
		'message' => array(
			'messageTable' => 'message',
		),	*/
        /**
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'password',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
	        'generatorPaths'=>array(
                'application.gii',   // a path alias
                'ext.giix-core', // giix generators
            ),
		),*/
		
		
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'application.modules.user.components.YumWebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('//user/user/login'),
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
		),
		
		/**'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=homer',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'password',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'cache' => array('class' => 'system.caching.CDummyCache'),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'virgaramada@gmail.com',
	),
);
