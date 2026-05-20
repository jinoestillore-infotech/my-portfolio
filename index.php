<?php 
$page = 'home';
$pageTitle = "Home";
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>
<section class="bg-dark text-white d-flex align-items-center" style="min-height: 90vh;">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <img src="assets/images/profile.jpg" 
                    alt="Profile Picture"
                    class="img-fluid rounded-circle shadow profile-img"
                    loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">Hi, I'm Jino</h1>
                <p class="lead">A Passionate Web Developer</p>
                <a href="project" class="btn btn-outline-primary btn-lg mt-3">View Work</a>
                <a href="contact" class="btn btn-outline-light btn-lg mt-3 ms-lg-2">Contact Me</a>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">About Me</h2>
        <p class="mx-auto" style="max-width: 700px;">
            I am a developer who builds responsive and user-friendly web applications. I enjoy solving problems through code and continuously learning new technologies. With a strong focus on performance, I strive to create solutions
            that are both efficient and scalable.
        </p>
        <a href="about" class="btn btn-dark mt-3">Learn More</a>
    </div>
</section>
<section class="bg-light py-5 mt-4">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Technical Skills</h2>
        <p class="text-muted mb-4 mx-auto" style="max-width: 600px;">
            Experienced in developing modern web applications using a combination of
            frontend and backend technologies, with a focus on performance, scalability,
            and clean code practices.
        </p>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100 border border-secondary skill-card">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-0">HTML5</h6>
                        <small class="text-muted">Semantic structure & accessibility</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100 border border-secondary skill-card">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-0">CSS3</h6>
                        <small class="text-muted">Responsive design & layouts</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100 border border-secondary skill-card">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-0">PHP</h6>
                        <small class="text-muted">Backend logic & data handling</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100 border border-secondary skill-card">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-0">Laravel</h6>
                        <small class="text-muted">Modern MVC PHP framework</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100 border border-secondary skill-card">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-0">Bootstrap 5</h6>
                        <small class="text-muted">UI & responsive components</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">Let's Work Together</h2>
        <p>Have a project in mind? Let’s build something great.</p>

        <a href="contact" class="btn btn-primary mt-3">Get In Touch</a>
    </div>
</section>
<?php include 'includes/footer.php'; ?>