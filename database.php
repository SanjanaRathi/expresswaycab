<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-02.cleardb.net"];
$username = $url["b48d7c722bf68a"];
$password = $url["ed0b19cb"];
$db = substr($url["heroku_79f9ab8d2fe0569"], 1);

$conn = new mysqli($server, $username, $password, $db);
$active_group = 'default';
$active_record = TRUE ;
$db['default']['hostname'] = $server;
$db['default']['username'] = $username;
$db['default']['password'] = $password;
$db['default']['database'] = $db;
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['striction'] = FALSE;

?>
