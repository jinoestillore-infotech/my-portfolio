<?php
$page = 'messages';
$pageTitle = "Messages";

include 'includes/db.php';
include 'includes/header.php';
include 'includes/navbar.php';

$limit = 5;
$pageNum = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$pageNum = max(1, $pageNum);

$offset = ($pageNum - 1) * $limit;

$totalStmt = $pdo->query("SELECT COUNT(*) FROM contacts");
$totalMessages = $totalStmt->fetchColumn();

$totalPages = ceil($totalMessages / $limit);

$stmt = $pdo->prepare("SELECT * FROM contacts ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$messages = $stmt->fetchAll();
?>

<link href="assets/css/messages.css" rel="stylesheet">

<section class="hero-messages-bg text-white text-center">
    <div class="container relative z-index-2">
        <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Admin Inbox</span>
        <h1 class="display-4 fw-extrabold mb-2" style="letter-spacing: -0.02em;">Client Messages</h1>
        <p class="lead text-white-50 mx-auto fs-5" style="max-width: 600px; font-weight: 300;">All submitted contact form queries and collaboration opportunities in one consolidated record.</p>
    </div>
</section>

<section class="py-5" style="padding-top: 80px !important; padding-bottom: 100px !important; background-color: #f8fafc !important;">
    <div class="container">
        
        <?php if (empty($messages)): ?>
            <div class="alert alert-info text-center py-5 shadow-sm border border-info border-opacity-10" style="background-color: #f0f9ff; color: #0369a1; border-radius: 20px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-3 text-info">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                <h4 class="fw-bold mb-1">No Messages Yet</h4>
                <p class="text-muted small mb-0">Submitted messages from your portfolio contact form will appear here.</p>
            </div>
        <?php else: ?>
            
            <div class="messages-card mb-4">
                <div class="table-responsive">
                    <table class="table table-modern align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Message Snippet</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($messages as $msg): ?>
                                <?php 
                                    // Generate letter initial for clean avatar display
                                    $initial = !empty($msg['name']) ? strtoupper(substr(trim($msg['name']), 0, 1)) : 'C'; 
                                ?>
                                <tr>
                                    <td>
                                        <div class="client-avatar-wrapper">
                                            <div class="client-avatar">
                                                <?= $initial ?>
                                            </div>
                                            <span class="client-name"><?= htmlspecialchars($msg['name']) ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="client-email"><?= htmlspecialchars($msg['email']) ?></span>
                                    </td>
                                    <td>
                                        <div class="msg-preview">
                                            <?= strlen($msg['message']) > 50 
                                                ? htmlspecialchars(substr($msg['message'], 0, 50)) . '...' 
                                                : htmlspecialchars($msg['message']) 
                                            ?>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="inbox/message_view.php?id=<?= $msg['id'] ?>" class="btn-view-action">
                                            <span>View Details</span>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Beautiful Customized Navigation Controls -->
            <?php if ($totalPages > 1): ?>
                <nav class="mt-4">
                    <ul class="pagination pagination-modern justify-content-center">
                        <li class="page-item <?= ($pageNum <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $pageNum - 1 ?>">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="15 18 9 12 15 6"/>
                                </svg>
                                <span>Prev</span>
                            </a>
                        </li>
                        
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= ($i == $pageNum) ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                        
                        <li class="page-item <?= ($pageNum >= $totalPages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $pageNum + 1 ?>">
                                <span>Next</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>