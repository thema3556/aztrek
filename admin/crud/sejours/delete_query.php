<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];

deleteEntity("sejour", $id);

header("Location: index.php");

