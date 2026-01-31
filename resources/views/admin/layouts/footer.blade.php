
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const menuBtn = document.getElementById("menuBtn");
    const sidebar = document.querySelector(".sidebar");
    const overlay = document.getElementById("overlay");

    menuBtn.onclick = () => {
    sidebar.classList.add("show");
    overlay.classList.add("show");
    };

    overlay.onclick = () => {
    sidebar.classList.remove("show");
    overlay.classList.remove("show");
    };
</script>

</body>
</html>
