<?php
require_once('../share/setup.php');

// set defaults (used when no param is given, see below)
$default_controller = 'default';
$default_action = 'index';

// get controller name and action from GET params
$controller = (isset($_GET['controller']) && trim($_GET['controller'] != '') ? $_GET['controller'] : $default_controller);
$action = (isset($_GET['action']) && trim($_GET['action'] != '') ? $_GET['action'] : $default_action);

$template->assign('page_name', $action);

// load and render template
try {   
    $template->display((isset($template_prefix) ? $template_prefix : '').$action.'.tpl');
}

catch (SmartyException $e) {    
    $template->display('error-404.tpl');
}

catch (Exception $e) {
    $template->display('error-500.tpl');
}
?>