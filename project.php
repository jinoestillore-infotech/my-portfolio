<?php 
$page = 'projects';
$pageTitle = "Projects";

include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<link href="assets/css/portfolio.css" rel="stylesheet">

<section class="hero-projects-bg text-white text-center">
    <div class="container relative z-index-2">
        <span class="section-badge bg-opacity-10 text-info" style="background: rgba(255,255,255,0.08); color: #60a5fa !important;">Portfolio Showcase</span>
        <h1 class="display-4 fw-extrabold mb-2" style="letter-spacing: -0.02em;">My Projects</h1>
        <p class="lead text-white-50 mx-auto fs-5" style="max-width: 600px; font-weight: 300;">A structured gallery representing scalable application frameworks, database tools, and web-based utilities.</p>
    </div>
</section>

<section class="py-5" style="padding-top: 80px !important; padding-bottom: 100px !important; background-color: #f8fafc !important;">
    <div class="container">
        <div class="row g-4">
            
            <!-- Project Card 1: Simple Inventory System -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-six.jpg" 
                             alt="Simple Inventory System"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">Simple Inventory System</h5>
                            <p class="project-desc">
                                A simple business inventory management system designed for stores and small businesses to manage products, monitor stock levels, track sales, and organize inventory records efficiently.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                            <span class="tech-pill tech-css">CSS</span>
                            <span class="tech-pill tech-js">JavaScript</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://demo-live-inventory-system.infinityfree.me/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2: Simple Library Borrowing System -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-four.jpg" 
                             alt="Simple Library Borrowing System"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">Simple Library Borrowing System</h5>
                            <p class="project-desc">
                                A simple library management system designed to handle book borrowing, return transactions, borrower records, and book availability tracking in an organized and efficient way.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://demo-live-library-system.is-great.net/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3: DPWH IT Inventory Assets -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-one.jpg" 
                             alt="DPWH IT Inventory Assets"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">DPWH IT Inventory Assets</h5>
                            <p class="project-desc">
                                A web-based inventory management system designed to track IT assets, manage records, and streamline equipment monitoring.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://dpwh-assets-inventory.page.gd/DPWH-SITE/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 4: Company Portal System -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-two.jpg" 
                             alt="Company Portal Systems"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">Company Portal System</h5>
                            <p class="project-desc">
                                A centralized portal system with HRIS, ERP, POS, and Helpdesk modules for managing company operations.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-laravel">Laravel</span>
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://demo-sea-olympus-marketing.nichesite.org/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 5: Tienda Marketplace -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-three.jpg" 
                             alt="Tienda Marketplace"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">Tienda Marketplace</h5>
                            <p class="project-desc">
                                A local marketplace platform designed to connect buyers and sellers, providing a simple and efficient way to manage products and transactions.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://tienda.nichesite.org/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 6: TrackEd -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-seven.jpg" 
                             alt="TrackEd"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">TrackEd</h5>
                            <p class="project-desc">
                                A student productivity and learning tracker system designed to help students organize schedules, manage study plans, track topics, monitor learning progress, and build consistent study habits.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-mysql">MySQL</span>
                            <span class="tech-pill tech-css">CSS</span>
                            <span class="tech-pill tech-js">JavaScript</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://demo-tracked.is-great.org/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 7: Tots Social Writing Platform -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="assets/images/project-eight.jpg" 
                             alt="Blogging Platform"
                             loading="lazy">
                    </div>
                    <div class="project-card-body">
                        <div>
                            <h5 class="project-title">Tots: Platform for Writers</h5>
                            <p class="project-desc">
                                A collaborative social publishing platform built to bring voices from all over the world together. Write beautifully, discover fresh perspectives, and connect with minds that inspire you.
                            </p>
                        </div>
                        <div class="mb-2">
                            <span class="tech-pill tech-laravel">Laravel</span>
                            <span class="tech-pill tech-php">PHP</span>
                            <span class="tech-pill tech-bootstrap">Bootstrap</span>
                            <span class="tech-pill tech-css">CSS</span>
                            <span class="tech-pill tech-js">JavaScript</span>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="https://staging-tots.freedev.app/" 
                           target="_blank" 
                           class="btn-project-action">
                            Live Demo
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>