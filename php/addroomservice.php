<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
include("config.php");
if(isset($_POST['roomName']) && isset($_POST['hasTV']) && isset($_POST['beds'])){
$roomName = $_POST['roomName'];
$hasTV = intval($_POST['hasTV']);
$beds = intval($_POST['beds']);
$stmt = $conn->prepare("INSERT INTO rooms (roomname, tv, beds) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $roomName, $hasTV, $beds);
$stmt->execute();
echo "ok";
}
?>