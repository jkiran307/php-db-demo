<?php
require_once __DIR__ . '/../includes/db.php';

$conn = getDbConnection();

$sql = "SELECT id, name FROM sample_table";
$result = $conn->query($sql);

echo "<h1>Database Results</h1>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . htmlspecialchars($row["id"]) . " - Name: " . htmlspecialchars($row["name"]) . "<br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
