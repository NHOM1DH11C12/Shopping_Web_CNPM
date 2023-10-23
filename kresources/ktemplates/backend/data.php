<?php
$conn = new PDO("mysql:host=localhost;dbname=toy;", "root", );
if (!$conn) {
    die("Connect database failed");
}
header('Content-Type: application/json');
$data = array();
$query = "SELECT order_name, COUNT(order_name) AS quantity FROM orders GROUP BY order_name";
$stmt = $conn->prepare($query);
if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
foreach ($result as $row) {
    $data[] = $row;
}
echo json_encode($data);
?>