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
<link href="../assets/css/message_view.css" rel="stylesheet">

<section class="hero-details-bg text-white text-center">
    <div class="container relative z-index-2">
        <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Inquiry Inspector</span>
        <h1 class="display-5 fw-extrabold mb-2" style="letter-spacing: -0.02em;">Message Details</h1>
        <p class="lead text-white-50 mx-auto fs-6" style="max-width: 600px; font-weight: 300;">Review complete client inquiry metadata, message content, and dispatch targeted email responses.</p>
    </div>
</section>

<section class="py-5" style="background-color: #f8fafc !important;">
    <div class="container" style="max-width: 780px;">
        
        <div class="details-card">
            <div class="card-body p-4 p-md-5">
                
                <!-- Header block -->
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div class="profile-header-block">
                        <div class="large-client-avatar">
                            <?= !empty($message['name']) ? strtoupper(substr(trim($message['name']), 0, 1)) : 'C' ?>
                        </div>
                        <div>
                            <h4 class="sender-title"><?= htmlspecialchars($message['name']) ?></h4>
                            <div class="sender-meta">
                                <a href="mailto:<?= htmlspecialchars($message['email']) ?>" class="meta-link"><?= htmlspecialchars($message['email']) ?></a>
                                <span class="meta-date">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    Received: <?= date('F j, Y, g:i a', strtotime($message['created_at'])) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown Options Menu -->
                    <div class="dropdown">
                        <button class="dropdown-btn-custom btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1"/>
                                <circle cx="12" cy="5" r="1"/>
                                <circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                            <li>
                                <a class="dropdown-item dropdown-item-danger d-flex align-items-center"
                                   href="delete_message.php?id=<?= $message['id'] ?>"
                                   onclick="return confirm('Are you sure you want to delete this message?');">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"/>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                        <line x1="10" y1="11" x2="10" y2="17"/>
                                        <line x1="14" y1="11" x2="14" y2="17"/>
                                    </svg>
                                    <span>Delete Message</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Custom Content Space -->
                <div class="mb-5 mt-4">
                    <span class="message-heading">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                        Message Content
                    </span>

                    <div class="message-content-wrapper">
                        <p class="message-text"><?= htmlspecialchars($message['message']) ?></p>
                    </div>
                </div>

                <hr class="my-4" style="border-color: #e2e8f0;">

                <!-- Action Footer -->
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-3">
                    <a href="../messages" class="btn-action-back justify-content-center">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"/>
                            <polyline points="12 19 5 12 12 5"/>
                        </svg>
                        <span>Back to Messages</span>
                    </a>
                    
                    <a href="mailto:<?= $message['email'] ?>?subject=Re: Portfolio Inquiry&body=Hello <?= urlencode($message['name']) ?>,%0D%0A%0D%0AThank you for your message." 
                       class="btn-action-reply justify-content-center">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"/>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                        </svg>
                        <span>Reply via Email</span>
                    </a>
                </div>

            </div>
        </div>
        
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>