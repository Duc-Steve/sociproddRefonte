


    <script src="/principale/public/assets/lib/wow/wow.min.js"></script>
    <script src="/principale/public/assets/lib/easing/easing.min.js"></script>
    <script src="/principale/public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/principale/public/assets/lib/counterup/counterup.min.js"></script>
    <script src="/principale/public/assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/principale/public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    
    
    <script>
        const menu = document.getElementById("menu");
        const overlay = document.getElementById("overlaywindow");
        const menuToggle = document.getElementById("menuToggle");
        const menuClose = document.getElementById("menuClose");

        // Ouvrir le menu
        menuToggle.addEventListener("click", () => {
            menu.classList.add("active");
            overlay.classList.add("active");
        });

        // Fermer le menu
        menuClose.addEventListener("click", () => {
            menu.classList.remove("active");
            overlay.classList.remove("active");
        });

        // Fermer le menu en cliquant sur l'overlay
        overlay.addEventListener("click", () => {
            menu.classList.remove("active");
            overlay.classList.remove("active");
        });


    </script>

    