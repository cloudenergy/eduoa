<?php
class DATABASE_CONFIG
{
	var $default = array('driver' => 'mysql',
								'connect' => 'mysql_connect',
								'host' => 'localhost',
								'login' => 'root',
								'password' => '',
								'database' => 'eduoa',
								'prefix' => '',
		                        'encoding' => 'utf8');

	var $test = array('driver' => 'mysql',
							'connect' => 'mysql_connect',
							'host' => 'localhost',
							'login' => 'root',
							'password' => '',
							'database' => 'eduoa',
							'prefix' => '');
}
?>