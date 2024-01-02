<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-logo">
    <div class="parallax-item"><a href="index.php"><img alt="neuron" src="/kiakkweb/assets/imgs/template/logo.svg" width="100px" height="100px"></a></div>
    </div><a class="btn-close hover-rotate"></a>
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <nav class="mt-15">
                <ul class="mobile-menu font-heading">
                <li><a href="index.php">Kezdőlap</a></li>
                    <li><a href="#">Szervezetünk</a></li>
                    <li class="has-children"><a href="/kiakkweb/index.php#kepzesek">Képzéseink</a>
                      <ul class="sub-menu">
                        <?php 
                        $courses = sqlQuery("SELECT `id`, `title` FROM `courses`");
                        while ($course = $courses->fetch_assoc()) {
                          echo '<li><a href="/kiakkweb/pages/course.php?course_id='.$course["id"].'">'.$course["title"].'</a></li>';
                        }
                        ?>
                      </ul>
                    </li>
                    <li><a href="/kiakkweb/index.php#oktatok">Oktatóink</a></li>
                    <li><a href="/kiakkweb/index.php#infrastruktura">Infrastruktúránk</a></li>
                    <li class="has-children"><a href="/kiakkweb/index.php#dokumentumok">Dokumentumok</a>
                      <ul class="sub-menu">
                        <?php 
                        $docs = sqlQuery("SELECT `title`, `path` FROM `docs`");
                        while ($docs_e = $docs->fetch_assoc()) {
                          echo '<li><a href="/kiakkweb/dashboard/'.$docs_e["path"].'">'.$docs_e["title"].'</a></li>';
                        }
                        ?>
                      </ul>
                    </li>
                    <li><a href="contact.php">Kapcsolat</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    <div class="mobile-snow"><img class="rotate-infinite snow-footer" src="/kiakkweb/assets/imgs/template/icons/snow-footer.png" alt="menu-icon"></div>
</div>
<div class="scroll-container" id="scroll-container">