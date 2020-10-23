<?php
////////////////////////////////////
//                                              
//      EFI GNN
//      settings.inc.php                        
//                                              
//      Settings for the scripts
//                                              
////////////////////////////////////

//
// PATHS
define("__BASE_WEB_ROOT__","");
define("__BASE_WEB_PATH__","/efi-web-master/html");
define("__EST_URL__","");
define("__INTERPRO_WEBSITE__","http://www.ebi.ac.uk/interpro/");

//
// UI PARAMETERS
define("__TIMEZONE__","America/Chicago");
define("__ADMIN_EMAIL__","efitools1@gmail.com");
define("__ERROR_ADMIN_EMAIL__","");
define("__FEEDBACK_EMAIL__","bchde@nus.edu.sg");
define("__UNIPROT_VERSION__","");
define("__ENA_VERSION__","");
define("__GNT_VERSION__","");
define("__EST_VERSION__","");
define("__INTERPRO_VERSION__","");
define("__EMAIL_FOOTER__","");
//define("__BETA_RELEASE__","BETA --");
define("__SHORTBRED_USER_GROUP__","");
//deeps
//define("__USE_DASHBOARD__",true);
define("__USE_TRAINING__",true);
define("__ENABLE_WEBSITE__",true);
define("__ENABLE_EMAILS__",true);
define("__ENABLE_ADVANCED_OPTIONS__",true);
define("__ENABLE_RECENT_JOBS__",true);
define("__ENABLE_JOB_GROUPS__",false);
define("__ENABLE_SHORTBRED__",true);

define("__CLUSTER_SCHEDULER__","slurm");
define("__MEMORY_QUEUE__","");
define("__NORMAL_QUEUE__","");

define("__EFIDB_MODULES__","");
define("__ENA_VERSIONS__","");
define("__UNIPROT_VERSIONS__",__UNIPROT_VERSION__);

//
// STATUS
define("__NEW__","NEW");
define("__RUNNING__","RUNNING");
define("__FINISH__","FINISH");
define("__FAILED__","FAILED");
define("__CANCELLED__","CANCELLED");
define("__ARCHIVED__","ARCHIVED");

//
// DEFAULTS
define("__MAX_TIMEOUT__","3600");
define("__RETENTION_DAYS__","30");
define("__FILE_RETENTION_DAYS__","80");  // Number of days to keep files from successful jobs around.
define("__FAILED_RETENTION_DAYS__","14"); // Number of days to keep files from failed jobs around.
define("__NUM_JOB_LIMIT__","6");

//
// DATABASES
define("__EFI_GNT_DB_NAME__","efi_gnt");
define("__EFI_EST_DB_NAME__","efi_est");
define("__EFI_SHORTBRED_DB_NAME__","efi_cgfp");

//
// DIRECTORIES
define("__BASE_DIR__",__DIR__."/..");
define("__JPGRAPH_SRC__",__BASE_DIR__."/libs/jpgraph-3.5.0b1/src");
define("__PHPEXCEL_SRC__",__BASE_DIR__."/libs/PHPExcel/Classes");
define("__PEAR_SRC__",__BASE_DIR__."/includes/pear");

define("__EST_RESULTS_DIR__","");
define("__EST_JOB_RESULTS_DIRNAME__","output");
define("__EST_COLORSSN_SUFFIX__","_coloredssn");

?>
