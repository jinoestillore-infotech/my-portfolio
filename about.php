<?php 
$page = 'about';
$pageTitle = "About Me";
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<style>
    /* Premium Modern Styles for About Page */
    :root {
        --primary-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        --dark-gradient: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        --soft-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.04);
        --hover-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.08);
        --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        
        /* Brand Colors for Progress Indicators */
        --color-html: #e34f26;
        --color-css: #1572b6;
        --color-js: #f7df1e;
        --color-php: #777bb3;
        --color-mysql: #00758f;
        --color-bootstrap: #7952b3;
        --color-laravel: #ff2d20;
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
    .hero-about-bg {
        background: var(--dark-gradient) !important;
        position: relative;
        overflow: hidden;
        padding: 100px 0 80px 0 !important;
    }

    .hero-about-bg::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(0,0,0,0) 70%);
        top: -50px;
        right: -50px;
        z-index: 1;
        pointer-events: none;
    }

    /* Profile Frame Design */
    .about-profile-frame {
        position: relative;
        display: inline-block;
        padding: 10px;
        border-radius: 24px;
        background: linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
        border: 1px solid rgba(15, 23, 42, 0.05);
        box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.08);
        transition: var(--transition-smooth);
    }

    .about-profile-frame:hover {
        transform: translateY(-4px);
        box-shadow: 0 30px 60px -15px rgba(15, 23, 42, 0.15);
    }

    .about-profile-frame img {
        border-radius: 18px !important;
        transition: var(--transition-smooth);
    }

    /* Sleek Modern Progress Bars */
    .progress-wrapper {
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.05);
        border-radius: 16px;
        padding: 30px;
        box-shadow: var(--soft-shadow);
    }

    .custom-progress-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #1e293b;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .custom-progress-track {
        height: 8px;
        background-color: #f1f5f9;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        margin-bottom: 24px;
    }

    .custom-progress-bar {
        height: 100%;
        border-radius: 10px;
        position: relative;
        transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Premium Glow and Brand Coding on Progress Bars */
    .bar-html { background: var(--color-html); box-shadow: 0 2px 10px rgba(227, 79, 38, 0.2); }
    .bar-css { background: var(--color-css); box-shadow: 0 2px 10px rgba(21, 114, 182, 0.2); }
    .bar-js { background: #eab308; box-shadow: 0 2px 10px rgba(234, 179, 8, 0.2); }
    .bar-php { background: var(--color-php); box-shadow: 0 2px 10px rgba(119, 123, 179, 0.2); }
    .bar-mysql { background: var(--color-mysql); box-shadow: 0 2px 10px rgba(0, 117, 143, 0.2); }
    .bar-bootstrap { background: var(--color-bootstrap); box-shadow: 0 2px 10px rgba(121, 82, 179, 0.2); }
    .bar-laravel { background: var(--color-laravel); box-shadow: 0 2px 10px rgba(255, 45, 32, 0.2); }

    /* Elegant Certificate Cards */
    .cert-card {
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.05);
        border-radius: 20px;
        padding: 36px 30px;
        transition: var(--transition-smooth);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: var(--soft-shadow);
    }

    .cert-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--primary-gradient);
        opacity: 0.8;
    }

    .cert-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--hover-shadow);
        border-color: rgba(59, 130, 246, 0.15);
    }

    .cert-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(59, 130, 246, 0.06);
        color: #3b82f6;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
    }

    /* Customized Buttons */
    .btn-custom-outline-dark {
        border: 1.5px solid #0f172a;
        background: transparent;
        color: #0f172a;
        font-weight: 500;
        padding: 10px 24px;
        border-radius: 8px;
        font-size: 0.88rem;
        transition: var(--transition-smooth);
    }

    .btn-custom-outline-dark:hover {
        background: #0f172a;
        color: #ffffff;
        transform: translateY(-2px);
    }

    .btn-custom-primary {
        background: var(--primary-gradient);
        color: #ffffff;
        border: none;
        padding: 14px 32px;
        border-radius: 8px;
        font-weight: 500;
        letter-spacing: 0.3px;
        box-shadow: 0 4px 14px 0 rgba(59, 130, 246, 0.35);
        transition: var(--transition-smooth);
    }

    .btn-custom-primary:hover {
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px 0 rgba(59, 130, 246, 0.5);
    }

    /* Elegant CTA Card wrapper */
    .cta-card {
        background: var(--dark-gradient);
        border-radius: 20px;
        padding: 60px 40px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cta-card::before {
        content: "";
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.12) 0%, rgba(0,0,0,0) 70%);
        pointer-events: none;
    }
</style>

<section class="hero-about-bg text-white text-center">
    <div class="container relative z-index-2">
        <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Get to know me</span>
        <h1 class="display-4 fw-extrabold mb-2" style="letter-spacing: -0.02em;">About Me</h1>
        <p class="lead text-white-50 mx-auto fs-5" style="max-width: 600px; font-weight: 300;">Discover the path, core skillsets, and validated achievements behind my development career.</p>
    </div>
</section>

<section class="py-5" style="padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center mb-5 mb-lg-0">
                <div class="about-profile-frame">
                    <img src="assets/images/profile.jpg" 
                         alt="Profile"
                         class="img-fluid"
                         style="width: 320px; height: 380px; object-fit: cover;"
                         loading="lazy">
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <span class="section-badge">Biography</span>
                <h2 class="fw-bold text-dark mb-4" style="letter-spacing: -0.02em; font-size: 2.25rem;">Who I Am</h2>
                <p class="text-secondary fs-5 lh-lg mb-4" style="font-weight: 300;">
                    As a web developer, I enjoy creating web applications that are fast, responsive, and user-friendly. I value clean code, clear communication, and continuous learning, and I strive to build digital experiences that are simple, effective, and reliable.
                </p>
                <p class="text-secondary fs-5 lh-lg" style="font-weight: 300;">
                    I focus on building reliable and efficient web applications while continuously learning and improving my skills.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="padding-top: 100px !important; padding-bottom: 100px !important; background-color: #f8fafc !important;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Skill Metrics</span>
            <h2 class="fw-bold text-dark mb-3" style="letter-spacing: -0.02em; font-size: 2.25rem;">Technical Proficiency</h2>
            <p class="text-muted mx-auto fs-5" style="max-width: 600px; font-weight: 300;">
                A granular, metric breakdown of my core system capabilities, front-end speed layers, and back-end environment integration limits.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="progress-wrapper">
                    
                    <!-- HTML5 Progress -->
                    <div class="custom-progress-label">
                        <span>HTML5</span>
                        <span>100%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-html" style="width: 100%;"></div>
                    </div>

                    <!-- CSS3 Progress -->
                    <div class="custom-progress-label">
                        <span>CSS3 & Modern Layouts</span>
                        <span>100%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-css" style="width: 100%;"></div>
                    </div>

                    <!-- JavaScript Progress -->
                    <div class="custom-progress-label">
                        <span>JavaScript (ES6+)</span>
                        <span>50%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-js" style="width: 50%;"></div>
                    </div>

                    <!-- PHP Progress -->
                    <div class="custom-progress-label">
                        <span>PHP (Backend Structures)</span>
                        <span>60%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-php" style="width: 60%;"></div>
                    </div>

                    <!-- MySQL Progress -->
                    <div class="custom-progress-label">
                        <span>MySQL & Database Schemas</span>
                        <span>90%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-mysql" style="width: 90%;"></div>
                    </div>

                    <!-- Bootstrap 5 Progress -->
                    <div class="custom-progress-label">
                        <span>Bootstrap 5 Framework</span>
                        <span>100%</span>
                    </div>
                    <div class="custom-progress-track">
                        <div class="custom-progress-bar bar-bootstrap" style="width: 100%;"></div>
                    </div>

                    <!-- Laravel Progress -->
                    <div class="custom-progress-label">
                        <span>Laravel Framework</span>
                        <span>60%</span>
                    </div>
                    <div class="custom-progress-track text-start mb-0">
                        <div class="custom-progress-bar bar-laravel" style="width: 60%;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="padding-top: 100px !important; padding-bottom: 110px !important;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Credentials</span>
            <h2 class="fw-bold text-dark mb-3" style="letter-spacing: -0.02em; font-size: 2.25rem;">Certifications</h2>
            <p class="text-muted mx-auto fs-5" style="max-width: 650px; font-weight: 300;">
                Verified industry certifications validating secure architecture development, modern version control workflows, and artificial intelligence foundations.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Certificate Card 1 -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="cert-card h-100 w-full">
                    <div>
                        <div class="cert-icon">
                            <!-- Custom Shield / Policy Compliance SVG -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3" style="font-size: 1.2rem; letter-spacing: -0.01em;">IT Policy & Compliance</h5>
                        <p class="text-muted mb-4" style="font-size: 0.9rem; line-height: 1.55;">Understanding IT system frameworks, critical data privacy parameters, and secure standard environments.</p>
                    </div>
                    <div class="mt-auto">
                        <a href="assets/certificates/it-policy.pdf" 
                           target="_blank" 
                           class="btn btn-custom-outline-dark btn-sm w-100 text-center">
                            View Certificate
                        </a>
                    </div>
                </div>
            </div>

            <!-- Certificate Card 2 -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="cert-card h-100 w-full">
                    <div>
                        <div class="cert-icon">
                            <!-- Git Branch / Merge SVG -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="6" y1="3" x2="6" y2="15"/>
                                <circle cx="18" cy="6" r="3"/>
                                <circle cx="6" cy="18" r="3"/>
                                <path d="M18 9a9 9 0 0 1-9 9"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3" style="font-size: 1.2rem; letter-spacing: -0.01em;">Git & GitHub Mastery</h5>
                        <p class="text-muted mb-4" style="font-size: 0.9rem; line-height: 1.55;">Advanced VCS operations, remote branching strategy, continuous integration merging, and team code review protocols.</p>
                    </div>
                    <div class="mt-auto">
                        <a href="assets/certificates/git-github.pdf" 
                           target="_blank" 
                           class="btn btn-custom-outline-dark btn-sm w-100 text-center">
                            View Certificate
                        </a>
                    </div>
                </div>
            </div>

            <!-- Certificate Card 3 -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="cert-card h-100 w-full">
                    <div>
                        <div class="cert-icon">
                            <!-- AI Brain / Cpu SVG -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"/>
                                <rect x="9" y="9" width="6" height="6"/>
                                <line x1="9" y1="1" x2="9" y2="4"/>
                                <line x1="15" y1="1" x2="15" y2="4"/>
                                <line x1="9" y1="20" x2="9" y2="23"/>
                                <line x1="15" y1="20" x2="15" y2="23"/>
                                <line x1="20" y1="9" x2="23" y2="9"/>
                                <line x1="20" y1="15" x2="23" y2="15"/>
                                <line x1="1" y1="9" x2="4" y2="9"/>
                                <line x1="1" y1="15" x2="4" y2="15"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold text-dark mb-3" style="font-size: 1.2rem; letter-spacing: -0.01em;">AI Fundamentals</h5>
                        <p class="text-muted mb-4" style="font-size: 0.9rem; line-height: 1.55;">Completed AICLASSASEAN course covering neural networks, deep-learning parameters, and dynamic automation systems.</p>
                    </div>
                    <div class="mt-auto">
                        <a href="assets/certificates/jino-estillore-ai-certificate.pdf" 
                           target="_blank" 
                           class="btn btn-custom-outline-dark btn-sm w-100 text-center">
                            View Certificate
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 text-center" style="padding-top: 100px !important; padding-bottom: 110px !important; background-color: #f8fafc !important;">
    <div class="container">
        <div class="cta-card shadow mx-auto" style="max-width: 960px;">
            <span class="section-badge bg-opacity-10 text-info" style="background: rgba(59, 130, 246, 0.1); color: #60a5fa !important;">Next Steps</span>
            <h2 class="fw-bold text-white mb-3" style="font-size: 2.5rem; letter-spacing: -0.02em;">Want to work together?</h2>
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 550px; font-weight: 300;">Feel free to reach out for collaborations, project estimations, or just a friendly developer hello! 👋</p>
            <div class="mt-4">
                <a href="contact" class="btn btn-custom-primary btn-lg px-5">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>