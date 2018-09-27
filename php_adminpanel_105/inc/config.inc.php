<?php
################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 #
## --------------------------------------------------------------------------- #
##  PHP AdminPanel Free                                                        #
##  Developed by:  ApPhp <info@apphp.com>                                      # 
##  License:       GNU GPL v.2                                                 #
##  Site:          http://www.apphp.com/php-adminpanel/                        #
##  Copyright:     PHP AdminPanel (c) 2006-2009. All rights reserved.          #
##                                                                             #
##  Additional modules (embedded):                                             #
##  -- PHP DataGrid 4.2.8                   http://www.apphp.com/php-datagrid/ #
##  -- JS AFV 1.0.5                 http://www.apphp.com/js-autoformvalidator/ #
##  -- jQuery 1.1.2                                         http://jquery.com/ #
##                                                                             #
################################################################################


// SITE MODES
//------------------------------------------------------------------------------
define("_SITE_MODE",    "debug"); // debug, production 

// SITE CONSTANTS
//------------------------------------------------------------------------------
define("_PANEL_NAME",   "Admin Panel");
define("_SITE_NAME",    "Your Site Name");
define("_SITE_ADDRESS", "domain.com");
define("_SITE_LANGUAGE", "en");
define("_ADMIN_EMAIL",  "admin@domain.com");
define("_CSS_STYLE",    "blue"); // blue, green
define("_DB_PREFIX",    "PHPAP105_");
define("_PHP_AP_VERSION", "1.0.5"); 
define("_SUPPORT_EMAIL", "support <support@domain.com>");
define("_CUSTOMER_EMAIL", "support <support@domain.com>");
define("_SITE_DIRECTORY", ""); // relatively to root (public html directory)
define("_SITE_UP_DIRECTORY", ""); // relatively to root (public html directory)

//------------------------------------------------------------------------------
if(_SITE_MODE == "debug"){
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting (E_ALL);    
}

//------------------------------------------------------------------------------
class Config
{

    var $host = '';
    var $user = ''; 
    var $password = '';
    var $database = '';  

    function Config()
    {
	$this->host     = "localhost";  
	$this->user     = "_USER_";
	$this->password = "_PASSWORD_";
	$this->database = "_DATABASE_";		
    }

}

?>