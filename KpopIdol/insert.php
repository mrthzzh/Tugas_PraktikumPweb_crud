<?php
require_once 'contact.php';

$res_insert = Contact::insert('114','082278901066', 'Kim Dokja');
echo $res_insert;
if ($res_insert) {
    header("Location: dashboard.php");
    exit();
}
?>