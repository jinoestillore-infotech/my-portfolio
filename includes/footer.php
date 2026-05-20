<footer class="bg-dark text-white mt-5 py-4">
    <div class="container text-center">
        <p class="mb-1">&copy; <?= date('Y'); ?> My Portfolio &mdash; Jino. All rights reserved.</p>
        <small class="fst-italic">
            jinoestillore.infotech@gmail.com
        </small>

    </div>
</footer>
<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.auto-hide-alert');
        alerts.forEach(alert => {
            alert.style.transition = "opacity 0.5s ease";
            alert.style.opacity = "0";

            setTimeout(() => {
                alert.remove();
            }, 500);
        });
    }, 2000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>