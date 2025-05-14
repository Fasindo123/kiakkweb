<header class="header sticky-bar">
        <div class="container-fluid">
          <div class="main-header">
            <div class="header-logo"><a class="d-flex cursor-scale small" href="index.php"><img alt="KIAKK" src="assets/imgs/template/logo.svg" width="65px" height="65px"><span class="logo-text">Kaposvári Informatika <br>Ágazati Képzőközpont</span></a></div>
            <div class="header-menu">
              <div class="header-nav">
                <nav class="nav-main-menu d-none d-xl-block">
                  <ul class="main-menu">
                    <li><a href="index.php">Kezdőlap</a></li>
                    <li><a href="index.php#">Szervezetünk</a></li>
                    <li class="has-children"><a href="index.php#kepzesek">Képzéseink</a>
                      <ul class="sub-menu">
                          <li><a href="#">Kurzus 1</a></li>
                          <li><a href="#">Kurzus 2</a></li>
                          <li><a href="#">Kurzus 3</a></li>
                          <li><a href="#">Kurzus 4</a></li>
                          <li><a href="#">Kurzus 5</a></li>
                      </ul>
                    </li>
                    <li><a href="index.php#oktatok">Oktatóink</a></li>
                    <li><a href="index.php#infrastruktura">Infrastruktúránk</a></li>
                    <li class="has-children"><a href="index.php#dokumentumok">Dokumentumok</a>
                      <ul class="sub-menu">
                          <li><a href="#">Dokumentum 1</a></li>
                          <li><a href="#">Dokumentum 1</a></li>
                          <li><a href="#">Dokumentum 1</a></li>
                          <li><a href="#">Dokumentum 1</a></li>
                          <li><a href="#">Dokumentum 1</a></li>
                      </ul>
                    </li>
                    <li><a href="pages/contact.php">Kapcsolat</a></li>
                  </ul>
                  
                </nav>
              </div>
            </div>
            <div id="navbarSupportedContent" id="search">
              <form role="search" method="get" action="pages/search.php">
                <div class="search-box">
                  <button class="btn-search"><i class="fas fa-search"></i></button>
                  <input type="search" class="input-search" name="s" id="search-text" placeholder="Keresés..." aria-label="Search">
                </div>
              </form>
            </div>
            <div class="header-account d-flex"><a class="dark-light-mode dark-mode" href="#"></a>
            <a class="menu-mobile mobile-nav-toggle d-xl-none" href="javascript:void(0);"><span class="item-menu"><span class="font-lg text-white"></span><img class="hover-rotate" alt="menu-icon" src="assets/imgs/template/menu1.svg"></span></a>
            </div>
          </div>
        </div><span class="comet-horizontal"></span>
      </header> 

<script>
  ! function (e) {
        "use strict";
        if (e(".main-nav").length) {
            var o = e(".main-nav").clone().prop({
                class: "mobile-nav d-xl-none"
            });
            e("body").append(o), e("body").prepend('<button type="button" class="mobile-nav-toggle d-xl-none"><i class="fa fa-bars"></i></button>'), e("body").append('<div class="mobile-nav-overly"></div>'), e(document).on("click", ".mobile-nav-toggle", function (o) {
                e("body").toggleClass("mobile-nav-active"), e(".mobile-nav-toggle i").toggleClass("fa-times fa-bars"), e(".mobile-nav-overly").toggle()
            }), e(document).on("click", ".mobile-nav .drop-down > a", function (o) {
                o.preventDefault(), e(this).next().slideToggle(300), e(this).parent().toggleClass("active")
            }), e(document).click(function (o) {
                var a = e(".mobile-nav, .mobile-nav-toggle");
                a.is(o.target) || 0 !== a.has(o.target).length || e("body").hasClass("mobile-nav-active") && (e("body").removeClass("mobile-nav-active"), e(".mobile-nav-toggle i").toggleClass("fa-times fa-bars"), e(".mobile-nav-overly").fadeOut())
            })
        } else e(".mobile-nav, .mobile-nav-toggle").length && e(".mobile-nav, .mobile-nav-toggle").hide()
    }(jQuery);
</script>