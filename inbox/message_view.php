<?php
include '../includes/db.php';
include '../includes/header.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid request.");
}

$stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
$stmt->execute([$id]);
$message = $stmt->fetch();

if (!$message) {
    die("Message not found.");
}
?>

<section class="bg-dark text-white text-center py-4">
    <div class="container">
        <h1 class="fw-bold">Message Details</h1>
        <p class="text-light mb-0">Review client inquiry information</p>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container" style="max-width: 750px;">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-5">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h4 class="fw-bold mb-0">
                            <?= htmlspecialchars($message['name']) ?>
                        </h4>
                        <small class="text-muted">
                            <?= htmlspecialchars($message['email']) ?><br>
                            <?= htmlspecialchars($message['created_at']) ?>
                        </small>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item text-danger"
                                href="delete_message.php?id=<?= $message['id'] ?>"
                                onclick="return confirm('Are you sure you want to delete this message?');">
                                    <i class="bi bi-trash"></i> Delete Message
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mb-4 mt-3">
                    <h6 class="text-muted mb-2">Message Content:</h6>

                    <div class="p-1 bg-white border-0 rounded-3">
                        <p class="mb-0" style="white-space: pre-line;">
                            <?= htmlspecialchars($message['message']) ?>
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between">

                    <a href="/portfolio/messages" class="btn btn-outline-secondary">
                        ← Back to Messages
                    </a>
                    <a href="mailto:<?= $message['email'] ?>?subject=Re: Portfolio Inquiry&body=Hello <?= urlencode($message['name']) ?>,%0D%0A%0D%0AThank you for your message." 
                    class="btn btn-primary">
                        Reply via Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>