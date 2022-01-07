<?php
header('Content-Type: application/json');

require_once('../connection.php');

$result = $connection->prepare("call general_statistics");
$result->execute();
$result = $result->fetchAll(PDO::FETCH_CLASS);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
echo json_encode($data);
?>