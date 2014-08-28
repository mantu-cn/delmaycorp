<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$ls_checkingTheme = "";
$pageURL = 'http';
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
if (strstr($pageURL, "admin")) {
	$ls_checkingTheme = "classic";
} else {
	$ls_checkingTheme = "";
}
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Delmay And Partners',
	'theme'=> $ls_checkingTheme,

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.controllers.*',
		'application.components.*',
		'application.extensions.*',
		
		'application.modules.*',
		
		'application.modules.admin.models.*',
		'application.modules.admin.views.*',
		'application.modules.admin.controllers.*',
		'application.modules.admin.components.*',
		'application.modules.srbac.controllers.SBaseController',
	),

	'modules'=>array(
		'admin',
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'111',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'application.gii',   // a path alias
                ),
			),
		'srbac' => array(
        		'userclass'=>'Tblusers', //default: User
        		'userid'=>'my_index', //default: userid
        		'username'=>'username', //default:username
        		'delimeter'=>'@', //default:-
        		'debug'=>false, //default :false
        		'pageSize'=>10, // default : 15
        		'superUser' =>'Authority', //default: Authorizer
        		'css'=>'srbac.css', //default: srbac.css
        		'layout'=>
        		'application.views.layouts.main', //default: application.views.layouts.main,
        		//must be an existing alias
        		'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
        		//srbac.views.authitem.unauthorized, must be an existing alias
        		'alwaysAllowed'=>array(
        		//default: array()
        				//'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
        				//'SiteError', 'SiteContact'
        			),
        		'userActions'=>array('Show','View','List'), //default: array()
        		'listBoxNumberOfLines' => 15, //default : 10
        		'imagesPath' => 'srbac.images', // default: srbac.images
        		'imagesPack'=>'noia', //default: noia
        		'iconText'=>true, // default : false
        		'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
        		//must be an existing alias
        		'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
        		//must be an existing alias
        		'showHeader'=>true, // default: false
        		'showFooter'=>true, // default: false
        		'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
        		// must be an existing alias
        		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
		'urlFormat' => 'path',
		'showScriptName' => false,
		'rules' => array(),
		),

		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=delmaycorp',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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

		'authManager'=>array(
        // Path to SDbAuthManager in srbac module if you want to use case insensitive
        //access checking (or CDbAuthManager for case sensitive access checking)
			'class'=>'application.modules.srbac.components.SDbAuthManager',
        		// The database component used
			'connectionID'=>'db',
        		// The itemTable name (default:authitem)
			'itemTable'=>'items',
        		// The assignmentTable name (default:authassignment)
			'assignmentTable'=>'assignments',
        		// The itemChildTable name (default:authitemchild)
			'itemChildTable'=>'itemchildren',
			),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
'params'=>array(
		// this is used in contact page
	'adminEmail'=>'webmaster@example.com',
	'languages'=>array('en_us'=>'English', 'fr'=>'French', 'fa_ir'=>'فارسی'),
	),
);