<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'mongodb',
		'host'     => 'localhost',
		'username' => 'admin',
		'password' => 'admin',
		'name'     => 'test',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		//'baseUri'        => '/', // if app at domain root
		'baseUri'        => '/178.62.242.235/',
	),
	'models' => array(
		'metadata' => array(
			'adapter' => 'Memory'
		)
	)
));