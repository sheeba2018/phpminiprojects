<?php
$data = $_POST['data'];

$data = json_decode($data);

switch($data->flag){
	case "update" : require_once '../controller/crud.php'; echo updateName($data); break;
	case "delete" : require_once '../controller/crud.php'; echo deleteName($data); break;
}

