<?php
require_once 'contact.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $res_delete = Contact::delete($id);

    if ($res_delete) {
        header("Location: dashboard.php");
        exit(); 
    }
} else {
    echo "ID tidak tersedia";
}
?>

