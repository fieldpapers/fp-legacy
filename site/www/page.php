<?php
   /**
    * Individual page for the print
    */

    ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.'../lib');
    require_once 'init.php';
    require_once 'data.php';
    require_once 'lib.auth.php';
    
    $scan_id = $_GET["id"];

    /**** ... ****/
    
    session_start();
    $dbh =& get_db_connection();
    remember_user($dbh);

    $sm = get_smarty_instance();
    
    $scan = get_scan($dbh, $scan_id);
    $sm->assign('scan', $scan);
    
    // Needed?
    $user_id = $_SESSION['user']['id'];
    $sm->assign('user_id', $user_id);
    
    /*    
    // Get prints by id
    $prints = get_prints_by_user_id($dbh, $user_id);
    $sm->assign('prints', $prints);
    */
    $type = $_GET['type'] ? $_GET['type'] : $_SERVER['HTTP_ACCEPT'];
    $type = get_preferred_type($type);
    
    if($type == 'text/html') {
        header("Content-Type: text/html; charset=UTF-8");
        print $sm->fetch("page.html.tpl");
    
    } elseif($type == 'application/paperwalking+xml') { 
        header("Content-Type: application/paperwalking+xml; charset=UTF-8");
        header("Access-Control-Allow-Origin: *");
        print '<'.'?xml version="1.0" encoding="utf-8"?'.">\n";
        print $sm->fetch("page.xml.tpl");
    
    } else {
        header('HTTP/1.1 400');
        die("Unknown type.\n");
    }

?>