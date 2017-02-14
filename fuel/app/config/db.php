<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'mysql' => array(
		'type'        => 'pdo',
        'connection'    => array(
            'dsn'   => 'mysql:host=localhost;dbname=db_fuel',
            'username'   => 'root',
            'password'   => '123',
            'persistent' => false,
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'collation'    => 'utf8_general_ci',
        'enable_cache' => true,
        'profiling'    => true,
	),
	'accesos' => array(
		'type'        => 'pdo',
        'connection'    => array(
            'dsn'   => 'sqlite:/home/pepe/Documentos/php/fuelphp/db/db_accesos.db',
            #'dsn'   => 'mysql:host=localhost;dbname=db_pokemones',
            'username'   => '',
            'password'   => '',
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => NULL,
        'collation'    => 'utf8_general_ci',
        'enable_cache' => true,
        'profiling'    => true,
	),
);
