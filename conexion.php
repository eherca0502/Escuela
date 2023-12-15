<?php
include 'adodb5/adodb.inc.php';
$db = newADOConnection('mysqli');
$db->connect("localhost", "root", "", "prypaginaweb") or die ("Error");
return $db;
?>