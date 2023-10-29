<!--Vendors Scripts-->
<script src="assets/js/vendors/jquery-3.7.0.min.js"></script>
<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
<!--Gsap-->
<script src="assets/js/vendors/gsap/3.12.0/gsap.min.js"></script>
<script src="assets/js/vendors/gsap/3.12.0/ScrollTrigger.min.js"></script>
<script src="assets/js/vendors/gsap/3.12.0/ScrollToPlugin.min.js"></script>
<!--Other-->
<script src="assets/js/vendors/isotope.js"></script>
<script src="assets/js/vendors/swiper-bundle.min.js"></script>
<script src="assets/js/vendors/slick.js"></script>
<script src="assets/js/vendors/magnific-popup.js"></script>
<script src="assets/js/vendors/jquery.lettering.js"></script>
<script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
<script src="assets/js/vendors/jquery.lazyload.min.js"></script>
<script src="assets/js/vendors/smooth-scrollbar.js"></script>
<!--Custom script for this template-->
<script src="assets/js/main.js?v=2.0.0"></script>
<script src="assets/js/swiper-slider-config.js?v=2.0.0"></script>
<script src="assets/js/custom.js?v=2.0.0"></script>
<script>
   $(document).ready(function() {
    const overlay = document.getElementById("overlay");
    const popup = document.getElementById("popup");
    const iframe = document.getElementById("popup-iframe");

    $(".popup-button").on("click", function() {
        const button = document.getElementById($(this).attr("id"));
        const open = button.getAttribute("open");
        iframe.setAttribute("src", open);
        overlay.style.display = "block";
        popup.style.display = "block";
    });

    overlay.addEventListener("click", function () {
        overlay.style.display = "none";
        popup.style.display = "none";
    });

    // Új eseménykezelő a gomb bezárásához
    $("#close-popup").on("click", function() {
        overlay.style.display = "none";
        popup.style.display = "none";
    });
});

</script>
