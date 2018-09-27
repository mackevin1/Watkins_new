<?php
################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 #
## --------------------------------------------------------------------------- #
##  ApPHP AdminPanel Free version 1.0.5                                        #
##  Developed by:  ApPhp <info@apphp.com>                                      # 
##  License:       GNU GPL v.2                                                 #
##  Site:          http://www.apphp.com/php-adminpanel/                        #
##  Copyright:     ApPHP AdminPanel (c) 2006-2009. All rights reserved.        #
##                                                                             #
##  Additional modules (embedded):                                             #
##  -- PHP DataGrid 4.2.8                   http://www.apphp.com/php-datagrid/ #
##  -- JS AFV 1.0.5                 http://www.apphp.com/js-autoformvalidator/ #
##  -- jQuery 1.1.2                                         http://jquery.com/ #
##                                                                             #
################################################################################

    session_start();

    
    require_once("inc/config.inc.php");
    require_once("inc/settings.inc.php");
    
    $log = (isset($_REQUEST['log'])) ? "out" : "";
    $msg = (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : "";
    
    $adm_logged = (isset($_SESSION['adm_logged'])) ? $_SESSION['adm_logged'] : false;
    

    if($adm_logged == true){
		$left_menu_page = "left_menu.php";
		$content_page = "home.php";
    }else{	
		$left_menu_page = "left_menu_empty.php";
		$content_page = "login.php";
    }

  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
    <title><?php echo $SETTINGS['site_name']; ?> :: Admin Panel</title>

    <!-- Meta tags -->    
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">

    <!-- CSS style files -->
    <link href="css/style_<?php echo $SETTINGS['css_style']; ?>.css" type="text/css" rel="stylesheet">

    <!-- JavaScript files -->
    <script type="text/JavaScript" src="js/functions.js"></script>         
</head>

<frameset rows="90px,*" FRAMEBORDER="no" FRAMESPACING="0" BORDER="0">
     <frame src="header.php" name="header" scrolling="no">
     <frameset cols="170px,*"  FRAMEBORDER="no" FRAMESPACING="0" BORDER="0">
          <frame src="<?php echo $left_menu_page; ?>" name="left_menu" scrolling="no">
          <frame src="<?php echo $content_page; ?>" name="frameMain">
     </frameset>
</frameset>

</html>