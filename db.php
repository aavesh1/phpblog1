$cleardb_url      = postgres://zyzvdksbjixsmo:96744cf3b1ff70005caf64551e40397839479bf377248495a87c1a68a0fadd06@ec2-52-44-46-66.compute-1.amazonaws.com:5432/d83lehf2lbt54n;
$cleardb_server   = $cleardb_url["ec2-52-44-46-66.compute-1.amazonaws.com"];
$cleardb_username = $cleardb_url["zyzvdksbjixsmo"];
$cleardb_password = $cleardb_url["96744cf3b1ff70005caf64551e40397839479bf377248495a87c1a68a0fadd06"];



$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => ec2-52-44-46-66.compute-1.amazonaws.com,
    'username' => zyzvdksbjixsmo,
    'password' => 96744cf3b1ff70005caf64551e40397839479bf377248495a87c1a68a0fadd06,
    'database' => d83lehf2lbt54n,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
