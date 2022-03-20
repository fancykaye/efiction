<?php 
$dbhost = "sql307.epizy.com";
$dbname = "epiz_31325106_eFiction";
$dbuser= "epiz_31325106";
$dbpass = "XcZt3jMPsji5k";
$sitekey = "u7XLsMtuCh";
$settingsprefix = "settab";

include_once("includes/dbfunctions.php");
if(!empty($sitekey)) $dbconnect = dbconnect($dbhost, $dbuser,$dbpass, $dbname);

?>