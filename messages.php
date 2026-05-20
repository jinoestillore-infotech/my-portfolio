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

<section class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="fw-bold">Client Messages</h1>
        <p class="lead">All submitted contact form entries</p>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <?php if (empty($messages)): ?>
            <div class="alert alert-info text-center">
                No messages yet.
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($messages as $msg): ?>
                            <tr>
                                <td><?= htmlspecialchars($msg['name']) ?></td>
                                <td><?= htmlspecialchars($msg['email']) ?></td>
                                <td>
                                    <?= strlen($msg['message']) > 50 
                                        ? htmlspecialchars(substr($msg['message'], 0, 50)) . '...' 
                                        : htmlspecialchars($msg['message']) 
                                    ?>
                                </td>
                                <td>
                                    <a href="inbox/message_view.php?id=<?= $msg['id'] ?>" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?= ($pageNum <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $pageNum - 1 ?>">Previous</a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= ($i == $pageNum) ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= ($pageNum >= $totalPages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $pageNum + 1 ?>">Next</a>
                        </li>

                    </ul>
                </nav>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>