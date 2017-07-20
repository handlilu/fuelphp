<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
  /*
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_dev',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
  */ 
  'default' => array(                   
    'type'           => 'pdo',                  
    'connection'     => array(                  
        'dsn'            => 'pgsql:host=127.0.0.1;dbname=sunseer',                   
        'username'       => 'postgres',                 
        'password'       => 'y@1qwRd5',                 
        'persistent'     => false,                  
        'compress'       => false,                  
    ),                  
    'identifier'     => '"',                    
    'table_prefix'   => '',                 
    'charset'        => 'utf8',                 
    'enable_cache'   => true,                   
    'profiling'      => false,                  
    //'readonly'       => array('slave1', 'slave2', 'slave3'),                  
   ),
);
