<?php
include '../includes/db.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid request.");
}

$stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
$stmt->execute([$id]);

header("Location: /portfolio/messages");
exit;