<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/index.php">
            MY PORTFOLIO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'home') ? 'active' : '' ?>" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'about') ? 'active' : '' ?>" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'projects') ? 'active' : '' ?>" href="project">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'contact') ? 'active' : '' ?>" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>