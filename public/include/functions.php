<?php
function addLog($conn, $user_id, $action, $table, $record_id, $description) {
    $stmt = $conn->prepare("INSERT INTO activity_log (user_id, action, table_name, record_id, description) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issis", $user_id, $action, $table, $record_id, $description);
    $stmt->execute();
}
