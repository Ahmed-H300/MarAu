<?php
header('Content-Type: application/json');

require_once('../connection.php');

$result = $connection->prepare("select Status,count(1) as 'Count' from Account_info Group BY Status ");
$result->execute();
$result = $result->fetchAll(PDO::FETCH_CLASS);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
echo json_encode($data);

?>