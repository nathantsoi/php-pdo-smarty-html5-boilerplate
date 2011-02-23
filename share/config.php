<?php
// site configuration
$config = array();

// ...
$config['app_name'] = '$$$AppName$$$';
$config['app_title'] = '$$$AppTitle$$$';

// debug mode
$config['debug'] = true;

// Server-related
$config['document_root'] = dirname(__FILE__).'/../public/';
$config['session_save_path'] = session_save_path();
$config['request_url'] = implode('/', array_slice(explode('/', 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']), 0, -1)).'/';
$config['media_url'] = $config['request_url'].'assets/';

$config['BASE-URL'] = '$$$mysite.com$$$'; // URL to index
$config['SESSION-URL'] = '.$$$mysite.com$$$'; // URL for session cookie on client

// log file
$config['logfile'] = $config['document_root'].'/../../logs/'.$config['app_name'].($config['debug'] ? '_debug' : 'stable').'.log';

// Smarty template engine
$config['smarty'] = array();
$config['smarty']['template_dir'] = dirname(__FILE__).'/templates/';
$config['smarty']['template_compile_dir'] = $config['smarty']['template_dir'].'compiled';
$config['smarty']['template_cache_dir'] = $config['smarty']['template_dir'].'cached';

// DB Connection Info
$config['DB-HOST'] = 'localhost'; // DATABASE hostname or ip
$config['DB-USER'] = '$$$DbUser$$$'; // DATABASE username
$config['DB-PASS'] = '$$$DbPass$$$'; // DATABASE password
$config['DB-NAME'] = '$$DbName$$$'; // DATABASE name on host
$config['DB-DSN'] = "mysql:host=localhost;dbname=".$config['DB-NAME']; // PDO DSN http://www.php.net/manual/en/ref.pdo-mysql.php

// SSSSHHHHH
$config['secret'] = '$$$SomeSecretsSauce$$$';
$config['e64secret'] = base64_encode($config['secret']);

/**
 *    Writes a custom message to the log file for debugging purposes.
 *    The message is prepended with a current timestamp and file identifier.
 *
 *    @param string $info_message The message to write to the log file.    
 *
 */
function log_entry($info_message) { 
    global $config;
    
    if (!$info_message || trim($info_message) == '') {
        return;
    }
       
    error_log('PHP '.$config['app_name'].' Message: ('.$_SERVER['PHP_SELF'].') '.str_replace("\n", "", $info_message));
}
?>
