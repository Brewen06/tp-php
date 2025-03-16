<?php
function logAction($message) {
    $logFile = 'actions.log';
    $time = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$time] $message" . PHP_EOL, FILE_APPEND);
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function fetchAllFiches($pdo) {
    $stmt = $pdo->query("SELECT * FROM fiches ORDER BY id DESC");
    return $stmt->fetchAll();
}
?>