<?php 
$page = 'home';
$pageTitle = "Home";
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<link href="assets/css/home.css" rel="stylesheet">

<section class="hero-bg text-white d-flex align-items-center" style="min-height: 85vh; padding: 80px 0;">
    <div class="container hero-content">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-6 text-center order-lg-2 mb-5 mb-lg-0">
                <div class="profile-img-container">
                    <img src="assets/images/profile.jpg" 
                         alt="Profile Picture"
                         class="img-fluid rounded-circle profile-img"
                         loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Welcome to my space</span>
                <h1 class="display-3 fw-extrabold mb-3" style="letter-spacing: -0.03em; font-weight: 800;">Hi, I'm <span style="background: linear-gradient(to right, #60a5fa, #a5b4fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Jino</span></h1>
                <p class="lead text-white-50 fs-4 mb-4" style="font-weight: 300; letter-spacing: 0.3px;">A Passionate Web Developer focused on creating clean and functional web experiences.</p>
                <div class="mt-4 pt-2">
                    <a href="project" class="btn btn-custom-primary btn-lg me-lg-3 me-2">View Work</a>
                    <a href="contact" class="btn btn-custom-outline btn-lg mt-0">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container text-center">
        <span class="section-badge">Behind the Code</span>
        <h2 class="fw-bold mb-4" style="letter-spacing: -0.02em; font-size: 2.25rem;">About Me</h2>
        <p class="mx-auto text-secondary lh-lg fs-5" style="max-width: 720px; font-weight: 400;">
            I am a developer who builds responsive and user-friendly web applications. I enjoy solving problems through code and continuously learning new technologies. With a strong focus on performance, I strive to create solutions that are both efficient and scalable.
        </p>
        <div class="mt-4">
            <a href="about" class="btn btn-custom-dark mt-2">Learn More</a>
        </div>
    </div>
</section>

<section class="py-5" style="padding-top: 100px !important; padding-bottom: 110px !important; background-color: #f8fafc !important;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Capabilities</span>
            <h2 class="fw-bold mb-3 text-dark" style="letter-spacing: -0.02em; font-size: 2.25rem;">Technical Skills</h2>
            <p class="text-muted mx-auto fs-5" style="max-width: 650px; font-weight: 300;">
                Experienced in developing modern web applications using a combination of frontend and backend technologies, with a focus on performance, scalability, and clean code practices.
            </p>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
            
            <!-- HTML5 Card -->
            <div class="col">
                <div class="premium-skill-card html-card h-100">
                    <div class="skill-brand-icon icon-html">
                        <!-- Custom Modern HTML5 Shield Icon -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059-.003.23-2.622L5.412 4.41l.698 8.01h7.426l-.213 2.428-2.316.619-2.3-.615-.147-1.643H5.918l.288 3.448 5.804 1.56 5.816-1.56.786-8.897H8.531z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem; letter-spacing: -0.01em;">HTML5</h5>
                    <p class="text-muted mb-4" style="font-size: 0.82rem; line-height: 1.45;">Semantic layout structures, SEO fundamentals, and responsive content formatting.</p>
                    <div class="proficiency-badge badge-html">Expert</div>
                </div>
            </div>

            <!-- CSS3 Card -->
            <div class="col">
                <div class="premium-skill-card css-card h-100">
                    <div class="skill-brand-icon icon-css">
                        <!-- Custom Modern CSS3 Shield Icon -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm14.341 7.288l-.242 2.723H9.195l.235 2.622h4.191l-.224 2.516-2.389.643-2.394-.645-.154-1.72H5.922l.302 3.475 4.784 1.284 4.793-1.284.66-7.399H7.202l-.233-2.623h9.112l.243-2.617H4.088l.693 7.824h11.06z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem; letter-spacing: -0.01em;">CSS3</h5>
                    <p class="text-muted mb-4" style="font-size: 0.82rem; line-height: 1.45;">Advanced animations, flexbox, CSS grid systems, and custom media queries.</p>
                    <div class="proficiency-badge badge-css">Advanced</div>
                </div>
            </div>

            <!-- PHP Card -->
            <div class="col">
                <div class="premium-skill-card php-card h-100">
                    <div class="skill-brand-icon icon-php">
                        <!-- Custom PHP Logo Icon -->
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.111 15.333c-.475.952-1.215 1.428-2.22 1.428-.431 0-.853-.083-1.266-.25a5.553 5.553 0 0 1-1.15-.658c-.147-.113-.321-.295-.521-.548a8.3 8.3 0 0 0-.585-.68 4.75 4.75 0 0 0-.649-.553 4.545 4.545 0 0 0-.671-.349c-.214-.078-.4-.117-.558-.117-.23 0-.411.047-.542.141-.131.094-.197.237-.197.429 0 .15.037.331.112.542.075.211.168.423.279.638.111.215.22.411.327.587l.215.35c.071.121.107.227.107.319 0 .121-.061.222-.183.303-.122.081-.29.121-.504.121-.4 0-.825-.19-1.276-.569a7.616 7.616 0 0 1-1.328-1.579A7.26 7.26 0 0 1 5.92 12.8a4.912 4.912 0 0 1-.225-1.503c0-.663.15-1.196.449-1.599.299-.403.738-.605 1.317-.605.474 0 .91.105 1.306.315.397.21.758.514 1.084.911l.457.57.48.583c.159.186.323.367.491.542.169.175.338.311.508.408.17.098.345.147.525.147.16 0 .296-.039.409-.118.113-.078.169-.199.169-.362 0-.256-.113-.624-.338-1.105a11.08 11.08 0 0 0-.816-1.46c-.32-.482-.601-.849-.844-1.103a4.706 4.706 0 0 0-.81-1.001 2.378 2.378 0 0 1-.72-.942c0-.135.048-.247.146-.337.098-.09.256-.135.473-.135.315 0 .68.163 1.095.489.415.326.837.765 1.266 1.316.429.551.815 1.157 1.158 1.817.343.66.514 1.258.514 1.794 0 .225-.015.438-.045.639a5.552 5.552 0 0 0-.101.595c0 .121.03.226.09.316.06.09.15.135.27.135.21 0 .438-.072.685-.215s.498-.329.753-.556a8.887 8.887 0 0 0 .73-.746c.218-.256.39-.49.518-.702l.315-.514c.059-.098.112-.172.157-.225.045-.053.094-.079.146-.079.105 0 .195.053.27.158.075.105.112.229.112.371 0 .39-.176.883-.529 1.479a9.61 9.61 0 0 1-1.158 1.547 10.96 10.96 0 0 1-1.574 1.45 6.002 6.002 0 0 1-1.789.923zm5.35-7.56c-.03-.09-.045-.158-.045-.203 0-.075.023-.131.068-.169.045-.037.112-.056.202-.056.12 0 .248.041.383.124.135.082.262.199.382.349s.214.311.281.484l.112.293a5.578 5.578 0 0 0 .101.247c.015.045.023.083.023.113 0 .045-.015.086-.045.124a.276.276 0 0 1-.169.056c-.09 0-.195-.045-.315-.135a3.834 3.834 0 0 1-.416-.393 3.393 3.393 0 0 1-.36-.45l-.112-.259z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem; letter-spacing: -0.01em;">PHP</h5>
                    <p class="text-muted mb-4" style="font-size: 0.82rem; line-height: 1.45;">Object-oriented structures, secure database logic, session management, and APIs.</p>
                    <div class="proficiency-badge badge-php">Advanced</div>
                </div>
            </div>

            <!-- Laravel Card -->
            <div class="col">
                <div class="premium-skill-card laravel-card h-100">
                    <div class="skill-brand-icon icon-laravel">
                        <!-- Custom Laravel Minimalist Logo Icon -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.955 12.181l-3.32-1.917V6.435l-3.32-1.917L13 6.435v7.665l-3.32-1.917V8.352L6.36 6.435 3.04 8.352V16.02l3.32 1.917v3.831L9.68 23.68l3.32-1.917v-3.831l3.32 1.917 3.32-1.917V14.1l3.32-1.919zM6.36 10.27l1.66.958v1.917l-1.66-.958V10.27zm3.32 1.917l1.66.958V17l-1.66-.959v-3.854zm3.32-5.753l1.66-.958v1.917l-1.66.958V6.434zm3.32 1.917l1.66.958v7.665l-1.66-.958V8.351zm3.32 3.832l-1.66.958v-1.917l1.66-.958v1.917z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem; letter-spacing: -0.01em;">Laravel</h5>
                    <p class="text-muted mb-4" style="font-size: 0.82rem; line-height: 1.45;">MVC architecture design, eloquent ORM, routing, middleware and secure migrations.</p>
                    <div class="proficiency-badge badge-laravel">Advanced</div>
                </div>
            </div>

            <!-- Bootstrap 5 Card -->
            <div class="col">
                <div class="premium-skill-card bootstrap-card h-100">
                    <div class="skill-brand-icon icon-bootstrap">
                        <!-- Custom Bootstrap Logo Icon -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.843 13.064c0 1.259-.444 2.193-1.332 2.802-.888.61-2.188.915-3.903.915H8.384V7.262h3.195c1.558 0 2.723.275 3.493.826.77.55 1.155 1.378 1.155 2.483 0 .762-.187 1.386-.562 1.872.482.433.723 1.011.723 1.733-.045-.112-.045-.112 0 0zm-2.825-3.321c0-.495-.145-.853-.435-1.074-.29-.22-.727-.331-1.312-.331H9.866v2.81h1.404c1.196 0 1.794-.468 1.794-1.405zm.366 3.238c0-.585-.184-1.011-.552-1.278-.368-.266-.913-.399-1.634-.399H9.866v3.354h1.404c1.233 0 1.85-.561 1.85-1.677h.064z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem; letter-spacing: -0.01em;">Bootstrap 5</h5>
                    <p class="text-muted mb-4" style="font-size: 0.82rem; line-height: 1.45;">Component overrides, utility utilities, customizable layouts, and theme integration.</p>
                    <div class="proficiency-badge badge-bootstrap">Expert</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 text-center" style="padding-top: 100px !important; padding-bottom: 110px !important;">
    <div class="container">
        <div class="cta-card shadow mx-auto" style="max-width: 960px;">
            <span class="section-badge bg-opacity-10 text-info" style="background: rgba(59, 130, 246, 0.1); color: #60a5fa !important;">Next Steps</span>
            <h2 class="fw-bold text-white mb-3" style="font-size: 2.5rem; letter-spacing: -0.02em;">Let's Work Together</h2>
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 550px; font-weight: 300;">Have an innovative project in mind? Let’s connect and build something exceptional.</p>
            <div class="mt-4">
                <a href="contact" class="btn btn-custom-primary btn-lg px-5">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>