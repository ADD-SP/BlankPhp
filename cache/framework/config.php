<?php return array (
  'app' => 
  array (
    'APP_NAME' => 'test',
    'url' => 'http://localhost/one',
    'static' => 'public/static',
    'template' => 'resource/template',
    'cookie' => 
    array (
      'expires' => 1556336363,
      'path' => '/',
      'domain' => NULL,
      'secure' => false,
      'httponly' => false,
    ),
    'session' => 
    array (
      'name' => 'BlankPhp',
      'driver' => 'file',
      'secure' => false,
    ),
    'Provider' => 
    array (
    ),
  ),
  'db' => 
  array (
    'host' => '127.0.0.1',
    'driver' => 'mysql',
    'port' => '3306',
    'charset' => 'utf8mb4',
    'database' => 'test',
    'username' => 'root',
    'password' => 'admin',
    'engine' => 'PDO',
  ),
  'route' => 
  array (
    'web' => 
    array (
      0 => 'TokenMiddleWare',
    ),
    'api' => 
    array (
      0 => 'JWTMiddleWare',
    ),
  ),
);