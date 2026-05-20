<?php 
$page = 'contact';
$pageTitle = "Contact Me";

include 'includes/db.php';

$stmt = $pdo->query("SELECT COUNT(*) FROM contacts");
$totalMessages = $stmt->fetchColumn();

$limitReached = $totalMessages >= 9;

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if ($limitReached) {
    $error = "The developer's inbox is full. Please contact: jinoestillore.infotech@gmail.com";
    } else {

        if ($name && $email && $message) {

            try {
                $stmt = $pdo->prepare("
                    INSERT INTO contacts (name, email, message)
                    VALUES (:name, :email, :message)
                ");

                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':message' => $message
                ]);

                $success = "Message sent successfully!";
            } catch (PDOException $e) {
                $error = "Failed to save message.";
            }

        } else {
            $error = "Please fill in all fields.";
        }
    }
}

include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>
<section class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="fw-bold">Contact Me</h1>
        <p class="lead">Let's get in touch</p>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="row justify-content-center align-items-start">
            <div class="col-lg-5 mb-4">
                <h2 class="fw-bold mb-3">Let’s Connect</h2>
                <p class="text-muted">
                    Feel free to reach out for collaborations, project inquiries, or just to say hello.
                </p>

                <ul class="list-unstyled mt-4">
                    <li class="mb-2">📩 I usually respond within 24&dash;48 hours</li>
                    <li class="mb-2">💻 Available for freelance / student projects</li>
                    <li class="mb-2">🤝 Open to collaboration and learning opportunities</li>
                </ul>
                <hr>
                <p class="text-muted small">
                    Tip: Be clear and specific in your message so I can respond faster and more accurately.
                </p>
            </div>
            <div class="col-lg-6">
                <?php if ($success): ?>
                    <div class="alert alert-success auto-hide-alert">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="alert alert-danger auto-hide-alert">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required <?= $limitReached ? 'disabled' : '' ?>>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required <?= $limitReached ? 'disabled' : '' ?>> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-control" required <?= $limitReached ? 'disabled' : '' ?>></textarea>
                    </div>
                    <button type="submit"
                            class="btn btn-primary w-100"
                            id="contactBtn"
                            <?= $limitReached ? 'disabled' : '' ?>>

                        <?= $limitReached 
                            ? "Inbox Full – Send your message here: jinoestillore.infotech@gmail.com" 
                            : "Send Message" 
                        ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.querySelector("form").addEventListener("submit", function () {
    const btn = document.getElementById("contactBtn");
    btn.disabled = true;
});
</script>

<?php include 'includes/footer.php'; ?>