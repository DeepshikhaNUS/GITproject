<?php
////////////////////////////////////
//                                              
//      EFI GNN
//      settings.inc.php                        
//                                              
//      Settings for the scripts
//                                              
////////////////////////////////////
require_once("settings_base.inc.php");

//
// PATHS
define("__WEB_PATH__",__BASE_WEB_PATH__."/");
define("__WEB_ROOT__",__BASE_WEB_ROOT__."".__WEB_PATH__);

//
// DATABASE
define("__MYSQL_HOST__","127.0.0.1");
define("__MYSQL_USER__","root");
define("__MYSQL_PASSWORD__","");
define("__MYSQL_DATABASE__","efi_user_auth");
define("__MYSQL_AUTH_DATABASE__","efi_user_auth");

//
// UI
define("__USE_DASHBOARD__",true);

?>
