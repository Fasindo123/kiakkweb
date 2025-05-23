<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>

<style>
  .header {
    background-color: transparent;
  }
</style>

<body>
      <?php require_once('components/loader.php'); ?>
      <?php require_once('components/mobile-menu.php'); ?>
      <?php require_once('components/header.php'); ?>
      <main class="main">
        <section class="section banner-mode-4 bg-900">
          <div class="banner-homepage4">
            <!-- <div class="banner-icon-1 shape-1"></div> -->
            <div class="banner-icon-2 shape-3"></div>
            <div class="container">
              <div class="text-center">
                <!-- <h3 class="color-brand-1 mb-25 text-up fadeInUp"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At laudantium nemo iusto tempora?</h3> -->
                <h2 class="display-5 color-white mb-55 fadeInUp">Kaposvári Informatika <br> Ágazati Képzőközpont</h2>
                <div class="d-flex justify-content-center fadeInUp get-quote"><a class="d-inline-block align-middle mr-50" href="pages/contact.php">
                    <div class="box-get-quote parallax-item">
                      <div class="img-quote img-zoom-in"><img src="assets/imgs/page/img-get-quote.png" alt="kiakk"></div>
                      <div class="info-quote"><span class="font-xl mr-15">Lépj Kapcsolatba <i class="fa-solid fa-share-from-square"></i></span></div>
                    </div></a>
                  <div class="d-flex align-items-center"><a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ"></a>
                    <h5 class="ml-30 color-white play-text">Mit csinálunk?</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Hírfolyam -->
        <section class="section is-mode">
          <div class="box-blogs bg-100">
            <div class="container">
              <h1 class="color-900 mb-95 text-center">Hírfolyam</h1>
              <div class="text-blog-big stroke-900 no-stroke scroll-move-left">Hírfolyam</div>
            </div>
            <div class="box-blog-slider">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-3-customer blogs-slider">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="cardBlog">
                              <div class="cardImage"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="#"></a></div>
                              <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">2025.02.12.</a><a class="link-blog" href="#">
                                  <h4 class="color-light-900 text-opacity">A hír címe</h4></a></div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="cardBlog">
                              <div class="cardImage"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="#"></a></div>
                              <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">2025.02.12.</a><a class="link-blog" href="#">
                                      <h4 class="color-light-900 text-opacity">A hír címe</h4></a></div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="cardBlog">
                              <div class="cardImage"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="#"></a></div>
                              <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">2025.02.12.</a><a class="link-blog" href="#">
                                      <h4 class="color-light-900 text-opacity">A hír címe</h4></a></div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="cardBlog">
                              <div class="cardImage"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="#"></a></div>
                              <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">2025.02.12.</a><a class="link-blog" href="#">
                                      <h4 class="color-light-900 text-opacity">A hír címe</h4></a></div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="cardBlog">
                              <div class="cardImage"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="#"></a></div>
                              <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">2025.02.12.</a><a class="link-blog" href="#">
                                      <h4 class="color-light-900 text-opacity">A hír címe</h4></a></div>
                          </div>
                      </div>
                  </div>
                  <div class="box-button-slider-bottom">
                    <div class="swiper-button-prev swiper-button-prev-group-4 swiper-button-prev-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                      </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-group-4 swiper-button-next-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Képzések -->
        <section class="section block-section-2 is-mode bg-0" id="kepzesek">
          <div class="container">
            <div class="row">
                <div class="col-lg-6 text-break">
                    <div class="card-feature-3 parallax-item">
                        <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01</h2>
                        <h3 class="card-title color-900 text-up">Képzés címe</h3>
                        <h5 class="card-desc color-900 text-opacity">Rövid leírás ad ad kgljdgdjhkj hksgjkhd hjgkjhkghjksfdjkjf sfjsfjsjklfjklsfjhsf</h5>
                        <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect" href="pages/course.php?course_id='.$course["id"].'">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-break">
                    <div class="card-feature-3 parallax-item">
                        <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01</h2>
                        <h3 class="card-title color-900 text-up">Képzés címe</h3>
                        <h5 class="card-desc color-900 text-opacity">Rövid leírás ad ad kgljdgdjhkj hksgjkhd hjgkjhkghjksfdjkjf sfjsfjsjklfjklsfjhsf</h5>
                        <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect" href="pages/course.php?course_id='.$course["id"].'">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-break">
                    <div class="card-feature-3 parallax-item">
                        <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01</h2>
                        <h3 class="card-title color-900 text-up">Képzés címe</h3>
                        <h5 class="card-desc color-900 text-opacity">Rövid leírás ad ad kgljdgdjhkj hksgjkhd hjgkjhkghjksfdjkjf sfjsfjsjklfjklsfjhsf</h5>
                        <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect" href="pages/course.php?course_id='.$course["id"].'">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-break">
                    <div class="card-feature-3 parallax-item">
                        <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01</h2>
                        <h3 class="card-title color-900 text-up">Képzés címe</h3>
                        <h5 class="card-desc color-900 text-opacity">Rövid leírás ad ad kgljdgdjhkj hksgjkhd hjgkjhkghjksfdjkjf sfjsfjsjklfjklsfjhsf</h5>
                        <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect" href="pages/course.php?course_id='.$course["id"].'">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-break">
                    <div class="card-feature-3 parallax-item">
                        <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01</h2>
                        <h3 class="card-title color-900 text-up">Képzés címe</h3>
                        <h5 class="card-desc color-900 text-opacity">Rövid leírás ad ad kgljdgdjhkj hksgjkhd hjgkjhkghjksfdjkjf sfjsfjsjklfjklsfjhsf</h5>
                        <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect" href="pages/course.php?course_id='.$course["id"].'">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></div>
                    </div>
                </div>
          </div>
        </section>
<!-- Oktatók -->
        <section class="section is-mode" id="oktatok">
          <div class="box-services box-about bg-100">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <h1 class="title-left text-up"><span class="stroke-900 no-stroke">Az</span><img class="d-inline-block align-middle" src="assets/imgs/page/icon-project.png" alt="kiakk"></h1>
                  <h1 class="title-left text-up"><span class="color-900">Oktatóinkról</span></h1>
                </div>
                <div class="col-lg-6">
                  <p class="font-2xl-bold color-900 text-opacity">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia in tenetur, eaque eveniet quis illo corporis ea ut id tempore doloremque, voluptatum sed vero minus! Aliquam, optio. Corrupti, quasi natus.</p>
                </div>
              </div>
            </div>
            <div class="box-services-slider box-about-slider box-slide-padding-left">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-4-center features-slider">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide text-break">
                          <div class="card-feature card-feature-2">
                              <div class="card-image"><img class="parallax-image popup-button" src="./assets/imgs/no-img.jpg" alt="asd"></div>
                              <div class="card-info">
                                  <h4 class="color-900 card-title">Oktató Neve</h4>
                                  <p class="card-desc font-xl color-600">Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás Rövid bemutatkozás </p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Infrastruktura -->
        <section class="section is-mode" id="infrastruktura">
          <div class="box-services bg-0">
            <div class="container">
              <div class="row align-items-end">
                <div class="col-md-9">
                  <h1 class="text-up"><span class="stroke-900 no-stroke">Infrastruktúra</span></h1>
                  <h1 class="text-up"><span class="color-900">Hol dolgozunk?</span></h1>
                </div>
                <div class="col-md-3">
                  <div class="box-button-slider-bottom box-button-slider-top">
                    <div class="swiper-button-prev swiper-button-prev-group-3 swiper-button-prev-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                      </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-group-3 swiper-button-next-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-services-slider">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-3-center services-slider">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide text-break">
                          <div class="cardService">
                              <div class="cardImage parallax-item"><a href="#"><img class="parallax-image" src="./assets/imgs/no-img.jpg" alt="asd"/></a></div>
                              <div class="cardInfo">
                                  <h3 class="color-900">Infrastruktúra neve</h3>
                                  <h5 class="color-700 text-opacity">Rövid leírás az infrastruktúráról Rövid leírás az infrastruktúráról Rövid leírás az infrastruktúráról Rövid leírás az infrastruktúráról Rövid leírás az infrastruktúráról</h5>
                                  <div class="d-flex"><a class="font-xl-bold color-900 link-effect more-picture-button" data-more-imgs="asd" style="cursor:pointer;">További képek</a><img class="ml-15" src="assets/imgs/template/arrow.svg" alt="nyíl"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Galéria -->
<?php
// Képek mappái
$imageFolders = [
    'assets/imgs/KÉPEK/',
    'assets/imgs/KÉPEK/Cisco Labor/'
];

// Képek kiterjesztése
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

// Képek listája
$imageFiles = [];

// Képek kiválasztása a mappákból
foreach ($imageFolders as $folder) {
    foreach (scandir($folder) as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array(strtolower($extension), $allowedExtensions)) {
            $imageFiles[] = $folder . $file;
        }
    }
}

// Képek véletlenszerű keverése
shuffle($imageFiles);

// Az random 6 kép kiválasztása
$selectedImages = array_slice($imageFiles, 0, 6);
?>

<section class="section is-mode">
    <div class="box-recent-work block-recent-work-4 bg-0">
        <div class="container">
            <div class="head-recent-work">
                <h1 class="color-900 text-up">Gal<span class="stroke-900 no-stroke">éria</span></h1>
                <a class="btn btn-default parallax-item" href="pages/kepek.php">Több kép<img class="ml-15" src="assets/imgs/template/arrow.svg" alt="Galéria képek"></a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="mt-100 position-relative box-recent-work-4">
                <div class="cardRecentBoxLists">
                    <?php $counter = 0; ?>
                    <?php foreach ($selectedImages as $image) : ?>
                        <div class="cardRecentStyle3 cursor-view">
                            <div class="cardImage"><img class="parallax-image scoll-reduce-border-radius" src="<?php echo $image; ?>" alt="Galéria képek"></div>
                        </div>
                        <?php $counter++; ?>
                        <?php if ($counter % 3 == 0) : ?>
                            </div><div class="cardRecentBoxLists">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gyakori kérdések -->
        <section class="section is-mode">
          <div class="box-faqs bg-100">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="color-900 mb-75 text-up">FAQs</h2>
                  <div class="parallax-item"><img class="parallax-image" src="assets/imgs/page/faq1.png" alt="kiakk"></div>
                  <div class="mt-105">
                    <h6 class="color-900 mb-15">Kérdése akadt?</h6>
                    <p class="font-md color-600">Vegye fel velünk a kapcsolatot, és mi a lehető leghamarabb jelentkezünk.</p>
                  </div>
                  <div class="mt-40">
                    <div class="grow-up"><a class="btn btn-default btn-default-sm" href="pages/contact.php">Kapcsolat<img class="ml-15" src="assets/imgs/template/arrow.svg" alt="kiakk"></a></div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="accordion" id="accordionFAQ">
                      <div class="accordion-item scroll-move-up-2">
                          <h5 class="accordion-header" id="headingOne">
                              <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_1" aria-expanded="false" aria-controls="faq_1">Kérdés</button>
                          </h5>
                          <div class="accordion-collapse collapse" id="faq_1" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body font-lg color-600">Válasz</div>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-image-faqs"><img class="parallax-image" src="assets/imgs/page/faq2.png" alt="kiakk"><img class="img-sub parallax-image" src="assets/imgs/page/faq3.png" alt="kiakk"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Dokumentumok -->
<section class="section is-mode" id="dokumentumok">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="color-900 mb-75 text-up">Dokumentumok</h2>
        <div class="accordion" id="accordionDocs">
            <div class="accordion-item scroll-move-up-2">
                <h5 class="accordion-header" id="docHeadingOne">
                    <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#docCollapse_1" aria-expanded="false" aria-controls="docCollapse_'">Dokumentum neve</button>
                </h5>
                <div class="accordion-collapse collapse" id="docCollapse_1" aria-labelledby="docHeadingOne" data-bs-parent="#accordionDocs">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="accordion-body font-lg color-600">
                            Dokumentum leírása
                        </div>
                    </div>
                    <div class="col-lg-4 mt-2">
                        <div class="grow-up"><a class="btn btn-default btn-default-sm" href="#" target="_blank">Megnyitás<img class="ml-15" src="assets/imgs/template/arrow.svg" alt="nyíl"></a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Támogatók -->
        <section class="section is-mode">
          <div class="box-loved bg-0">
            <div class="container">
              <div class="row align-items-end">
                <div class="col-lg-7 mb-30">
                  <div class="box-head-loved">
                    <h3 class="color-900 text-opacity">Támogatóink</h3>
                  </div>
                </div>
                <div class="col-lg-5 mb-30">
                  <p class="font-xl color-900 text-up">Köszönjük szépen szíves támogatásukat!</p>
                </div>
              </div>
              <div class="box-why-us-bottom">
              <div class="box-logo-slider">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-5">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kometa.png" alt="Kométa 99 Élelmiszeripari Zrt." title="Kométa 99 Élelmiszeripari Zrt."></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kszc.png" alt="Kaposvári Szakképzési Centrum" title="Kaposvári Szakképzési Centrum"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kaposvar.png" alt="Kaposvár Megyei Jogú Város" title="Kaposvár Megyei Jogú Város"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/bazisinfo.png" alt= "Bázis Informatika Kft" title="Bázis Informatika Kf"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/precognox.png"  alt="Precognox Informatikai Kft" title="Precognox Informatikai Kft"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>      
          </div>
        </section>

        <!-- Képnézegető -->
        <div id="myModal" class="modal">
          <span class="close" id="closeIcon">&times;</span>
          <div id="more-picture-container"></div>
        </div>
     
  <?php require_once("components/footer.php"); ?>
  </div>
  <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>