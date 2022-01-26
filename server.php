<?php
    require __DIR__ '/database.php';
    $filejson = json_encode($database);
    header('Content-Type: application/json');
    echo $filejson;
?>