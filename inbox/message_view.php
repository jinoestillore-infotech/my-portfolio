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

<style>
    /* Premium Modern Styles for Message View Page */
    :root {
        --primary-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        --dark-gradient: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        --soft-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.04);
        --hover-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.08);
        --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Subtitle Badges */
    .section-badge {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #3b82f6;
        background: rgba(59, 130, 246, 0.05);
        border: 1px solid rgba(59, 130, 246, 0.1);
        padding: 6px 16px;
        border-radius: 30px;
        margin-bottom: 16px;
    }

    /* Hero Banner Redesign */
    .hero-details-bg {
        background: var(--dark-gradient) !important;
        position: relative;
        overflow: hidden;
        padding: 80px 0 60px 0 !important;
    }

    .hero-details-bg::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(0,0,0,0) 70%);
        top: -50px;
        left: -50px;
        z-index: 1;
        pointer-events: none;
    }

    /* Premium Modern Container */
    .details-card {
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        border-radius: 24px;
        box-shadow: var(--soft-shadow);
        transition: var(--transition-smooth);
        overflow: hidden;
    }

    .details-card:hover {
        box-shadow: var(--hover-shadow);
    }

    /* Sender Profile Card Header */
    .profile-header-block {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .large-client-avatar {
        width: 64px;
        height: 64px;
        border-radius: 20px;
        background: rgba(59, 130, 246, 0.08);
        color: #3b82f6;
        font-weight: 700;
        font-size: 1.6rem;
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
        border: 1px solid rgba(59, 130, 246, 0.15);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.05);
    }

    .sender-title {
        font-size: 1.5rem;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.02em;
        margin-bottom: 4px;
    }

    .sender-meta {
        color: #64748b;
        font-size: 0.9rem;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .meta-link {
        color: #3b82f6;
        text-decoration: none;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 600;
    }

    .meta-date {
        font-size: 0.82rem;
        color: #94a3b8;
    }

    /* Customized Action Dropdown */
    .dropdown-btn-custom {
        background: rgba(15, 23, 42, 0.02);
        border: 1px solid rgba(15, 23, 42, 0.06);
        color: #64748b;
        border-radius: 12px;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition-smooth);
    }

    .dropdown-btn-custom:hover, 
    .dropdown-btn-custom:focus {
        background: #f1f5f9;
        color: #0f172a;
        border-color: #cbd5e1;
    }

    .dropdown-menu-custom {
        border: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08);
        border-radius: 14px;
        padding: 8px;
    }

    .dropdown-item-danger {
        color: #ef4444;
        border-radius: 8px;
        font-weight: 500;
        padding: 10px 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: var(--transition-smooth);
    }

    .dropdown-item-danger:hover {
        background-color: #fef2f2;
        color: #b91c1c;
    }

    /* Dynamic Message Content Box */
    .message-content-wrapper {
        background-color: #f8fafc;
        border: 1px solid rgba(15, 23, 42, 0.04);
        border-radius: 16px;
        padding: 30px;
        position: relative;
    }

    .message-content-wrapper::before {
        content: '"';
        position: absolute;
        top: 10px;
        left: 20px;
        font-size: 5rem;
        font-family: Georgia, serif;
        color: rgba(15, 23, 42, 0.03);
        line-height: 1;
    }

    .message-heading {
        font-size: 0.78rem;
        font-weight: 700;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .message-text {
        font-size: 1.05rem;
        line-height: 1.7;
        color: #334155;
        font-weight: 300;
        white-space: pre-line;
        position: relative;
        z-index: 2;
    }

    /* Polished Action Buttons */
    .btn-action-back {
        border: 1.5px solid #e2e8f0;
        background: transparent;
        color: #475569;
        font-weight: 600;
        padding: 12px 24px;
        border-radius: 12px;
        font-size: 0.9rem;
        transition: var(--transition-smooth);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-action-back:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
        color: #0f172a;
        transform: translateX(-2px);
    }

    .btn-action-reply {
        background: var(--primary-gradient);
        border: none;
        color: #ffffff;
        font-weight: 600;
        padding: 12px 28px;
        border-radius: 12px;
        font-size: 0.9rem;
        transition: var(--transition-smooth);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-action-reply:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(59, 130, 246, 0.25);
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: #ffffff;
    }
</style>

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
                    <a href="/portfolio/messages" class="btn-action-back justify-content-center">
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