<?php 
include('server.php');

$stmt = $db->prepare("SELECT * FROM users ");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

return $stmt->fetchAll();
?>