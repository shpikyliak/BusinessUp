<?php
require_once 'classes/DB.php';

try {
    $db = new DB();
    $db->add($_POST);
    echo json_encode('success');
} catch (Exception $e) {
    echo json_encode(['error'=>$e->getMessage()]);
}