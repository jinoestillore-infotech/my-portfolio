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

<style>
    /* Premium Modern Styles for Contact Page */
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
    .hero-contact-bg {
        background: var(--dark-gradient) !important;
        position: relative;
        overflow: hidden;
        padding: 100px 0 80px 0 !important;
    }

    .hero-contact-bg::before {
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

    /* Connect Info Side Column Styles */
    .info-container {
        padding-right: 2rem;
    }

    .info-title {
        font-size: 2rem;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.02em;
    }

    .contact-item-icon {
        width: 44px;
        height: 44px;
        background: rgba(59, 130, 246, 0.06);
        color: #3b82f6;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: var(--transition-smooth);
    }

    .contact-list-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 24px;
        transition: var(--transition-smooth);
    }

    .contact-list-item:hover .contact-item-icon {
        background: #3b82f6;
        color: #ffffff;
        transform: scale(1.05);
    }

    .contact-item-text {
        color: #475569;
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        padding-top: 10px;
    }

    /* Premium Modern Form Wrapper Card */
    .contact-form-card {
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        border-radius: 24px;
        padding: 40px;
        box-shadow: var(--soft-shadow);
        transition: var(--transition-smooth);
    }

    .contact-form-card:hover {
        box-shadow: var(--hover-shadow);
        border-color: rgba(15, 23, 42, 0.09);
    }

    /* Custom Form Field Design */
    .form-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control {
        background-color: #f8fafc;
        border: 1.5px solid #e2e8f0;
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 0.95rem;
        color: #0f172a;
        font-weight: 400;
        transition: var(--transition-smooth);
    }

    .form-control:focus {
        background-color: #ffffff;
        border-color: #3b82f6;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        outline: none;
    }

    .form-control::placeholder {
        color: #94a3b8;
    }

    /* Premium Action Button styling */
    .btn-contact-submit {
        background: var(--primary-gradient);
        border: none;
        color: #ffffff;
        font-weight: 600;
        padding: 14px 28px;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: var(--transition-smooth);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
    }

    .btn-contact-submit:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }

    .btn-contact-submit:disabled {
        background: #94a3b8 !important;
        color: #e2e8f0 !important;
        box-shadow: none !important;
        cursor: not-allowed;
    }

    /* Soft Accent Tip Container */
    .tip-box {
        background: rgba(15, 23, 42, 0.02);
        border-left: 3px solid #64748b;
        padding: 16px 20px;
        border-radius: 0 12px 12px 0;
        margin-top: 32px;
    }

    /* Polished Notifications alerts */
    .alert {
        border: none;
        border-radius: 14px;
        padding: 16px 20px;
        font-weight: 500;
        font-size: 0.92rem;
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
    }

    .alert-success {
        background-color: #ecfdf5;
        color: #065f46;
        border: 1px solid rgba(16, 185, 129, 0.15);
    }

    .alert-danger {
        background-color: #fef2f2;
        color: #991b1b;
        border: 1px solid rgba(239, 68, 68, 0.15);
    }
</style>

<section class="hero-contact-bg text-white text-center">
    <div class="container relative z-index-2">
        <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Get In Touch</span>
        <h1 class="display-4 fw-extrabold mb-2" style="letter-spacing: -0.02em;">Contact Me</h1>
        <p class="lead text-white-50 mx-auto fs-5" style="max-width: 600px; font-weight: 300;">Let’s establish connection. Drop a message to start collaboration on your next workspace project.</p>
    </div>
</section>

<section class="py-5" style="padding-top: 80px !important; padding-bottom: 100px !important; background-color: #f8fafc !important;">
    <div class="container">
        <div class="row justify-content-center align-items-start g-5">
            
            <!-- Left Info Area -->
            <div class="col-lg-5 mb-4">
                <div class="info-container">
                    <h2 class="info-title mb-4">Let’s Connect</h2>
                    <p class="text-muted mb-4 fs-6" style="line-height: 1.7; font-weight: 300;">
                        Feel free to reach out for collaborations, project inquiries, or just to say hello. I'm always looking forward to hearing about new concepts and technologies.
                    </p>

                    <div class="mt-4">
                        <div class="contact-list-item">
                            <div class="contact-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <p class="contact-item-text">I usually respond within 24&dash;48 hours</p>
                        </div>

                        <div class="contact-list-item">
                            <div class="contact-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                    <line x1="8" y1="21" x2="16" y2="21"/>
                                    <line x1="12" y1="17" x2="12" y2="21"/>
                                </svg>
                            </div>
                            <p class="contact-item-text">Available for freelance / student projects</p>
                        </div>

                        <div class="contact-list-item">
                            <div class="contact-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <p class="contact-item-text">Open to collaboration and learning opportunities</p>
                        </div>
                    </div>

                    <div class="tip-box">
                        <span class="d-block fw-bold text-dark mb-1" style="font-size: 0.88rem; text-transform: uppercase; letter-spacing: 0.5px;">Pro Tip</span>
                        <p class="text-muted small mb-0">Be clear and specific in your message so I can respond faster and more accurately to your request.</p>
                    </div>
                </div>
            </div>

            <!-- Right Contact Card Area -->
            <div class="col-lg-7 col-xl-6">
                <div class="contact-form-card">
                    
                    <?php if ($success): ?>
                        <div class="alert alert-success auto-hide-alert mb-4">
                            <div class="d-flex align-items-center gap-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span><?= $success ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-danger auto-hide-alert mb-4">
                            <div class="d-flex align-items-start gap-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="mt-1 flex-shrink-0">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                                <span><?= $error ?></span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="mb-4">
                            <label class="form-label">Name</label>
                            <input type="text" 
                                   name="name" 
                                   class="form-control" 
                                   placeholder="Your full name"
                                   required 
                                   <?= $limitReached ? 'disabled' : '' ?>>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" 
                                   name="email" 
                                   class="form-control" 
                                   placeholder="name@example.com"
                                   required 
                                   <?= $limitReached ? 'disabled' : '' ?>> 
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Message</label>
                            <textarea name="message" 
                                      rows="5" 
                                      class="form-control" 
                                      placeholder="How can I help you build something great?"
                                      required 
                                      <?= $limitReached ? 'disabled' : '' ?>></textarea>
                        </div>
                        
                        <button type="submit"
                                class="btn btn-contact-submit w-100 d-flex align-items-center justify-content-center gap-2"
                                id="contactBtn"
                                <?= $limitReached ? 'disabled' : '' ?>>
                            <?php if ($limitReached): ?>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                                <span>Inbox Full – Use: jinoestillore.infotech@gmail.com</span>
                            <?php else: ?>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"/>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                                </svg>
                                <span>Send Message</span>
                            <?php endif; ?>
                        </button>
                    </form>
                </div>
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