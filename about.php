<?php 
$page = 'about';
$pageTitle = "About Me";
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>
<section class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="fw-bold">About Me</h1>
        <p class="lead">Get to know more about me and what I do</p>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <img src="assets/images/profile.jpg" 
                     alt="Profile"
                     class="img-fluid rounded-4 shadow"
                     style="max-width: 300px;"
                     loading="lazy">
            </div>
            <div class="col-lg-7">
                <h2 class="fw-bold mb-3">Who I Am</h2>
                <p>
                    I'm a passionate web developer who enjoys building responsive, user-friendly websites.
                    I focus on writing clean, maintainable code and creating designs that provide a great user experience.
                </p>
                <p>
                    My goal is to continuously improve my skills and build projects that solve real-world problems.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">My Skills</h2>
        <div class="row col-12 col-sm-6 mx-auto">
            <div class="mb-3 text-start">
                <label class="fw-semibold">HTML</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 100%;">100%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">CSS</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 100%;">100%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">JavaScript</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 50%;">50%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">PHP</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 60%;">60%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">MySQL</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 90%;">90%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">Bootstrap 5</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 100%;">100%</div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="fw-semibold">Laravel</label>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 60%;">60%</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Certificates</h2>
        <p class="text-muted mb-5">
            Professional training and certifications I have completed
        </p>
        <div class="row justify-content-center">
            <div class="col-md-5 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <h5 class="fw-bold">IT Policy & Compliance</h5>
                    <p class="text-muted">
                        Understanding IT rules, data privacy, and proper system usage in development environments.
                    </p>
                    <a href="assets/certificates/it-policy.pdf" 
                       target="_blank" 
                       class="btn btn-outline-dark btn-sm mt-2">
                        View Certificate
                    </a>
                </div>
            </div>

            <div class="col-md-5 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <h5 class="fw-bold">Git & GitHub Mastery</h5>
                    <p class="text-muted">
                        Version control, branching, merging, and collaboration using Git workflows.
                    </p>
                    <a href="assets/certificates/git-github.pdf" 
                       target="_blank" 
                       class="btn btn-outline-dark btn-sm mt-2">
                        View Certificate
                    </a>
                </div>
            </div>

            <div class="col-md-5 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <h5 class="fw-bold">AI Fundamentals Certification</h5>
                    <p class="text-muted">
                        Completed the AICLASSASEAN Free Youth Course focused on Artificial Intelligence fundamentals, AI tools, and emerging technologies.
                    </p>
                    <a href="assets/certificates/jino-estillore-ai-certificate.pdf" 
                    target="_blank" 
                    class="btn btn-outline-dark btn-sm mt-2">
                        View Certificate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">Want to work together?</h2>
        <p>Feel free to reach out for collaborations or just a friendly hello 👋</p>

        <a href="contact" class="btn btn-primary btn-lg mt-3">Contact Me</a>
    </div>
</section>
<?php include 'includes/footer.php'; ?>