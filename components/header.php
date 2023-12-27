<header class="header sticky-bar">
        <div class="container-fluid">
          <div class="main-header">
            <div class="header-logo parallax-item"><a class="d-flex cursor-scale small" href="index.php"><img alt="neuron" src="assets/imgs/template/logo.svg" width="90px" height="90px"><span class="logo-text">Kaposvári Informatika <br>Ágazati Képzőközpont</span></a></div>
            <div class="header-menu">
              <div class="header-nav">
                <nav class="nav-main-menu d-none d-xl-block">
                  <ul class="main-menu">
                    <li><a href="index.php">Kezdőlap</a></li>
                    <li><a href="#">Szervezetünk</a></li>
                    <li class="has-children"><a href="#kepzesek">Képzéseink</a>
                      <ul class="sub-menu">
                        <li><a href="#">Képzés 1</a></li>
                        <li><a href="#">Képzés 2</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href="#oktatok">Oktatóink</a>
                        <ul class="sub-menu">
                          <li><a href="#">Oktató 1</a></li>
                          <li><a href="#">Oktató 2</a></li>
                          <li><a href="#">Oktató 3</a></li>
                          <li><a href="#">Oktató 4</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="#infrastruktura">Infrastruktúránk</a>
                      <ul class="sub-menu">
                        <li><a href="#">Helyiség 1</a></li>
                        <li><a href="#">Helyiség 2</a></li>
                        <li><a href="#">Helyiség 3</a></li>
                        <li><a href="#">Helyiség 4</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href="#dokumentumok">Dokumentumok</a>
                      <ul class="sub-menu">
                        <li><a href="#">Dok 1</a></li>
                        <li><a href="#">Dok 2</a></li>
                        <li><a href="#">Dok 3</a></li>
                        <li><a href="#">Dok 4</a></li>
                        <li><a href="#">Dok 5</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">Kapcsolat</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="header-account d-flex"><a class="dark-light-mode dark-mode" href="#"></a>
            <a class="menu-mobile mobile-nav-toggle d-xl-none" href="javascript:void(0);"><span class="item-menu"><span class="font-lg text-white">MENU</span><img class="hover-rotate" alt="neuron" src="assets/imgs/template/icons/menu1.svg"></span></a>
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