<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
      <?php require_once('components/loader.php'); ?>
      <?php require_once('components/mobile-menu.php'); ?>
      <?php require_once('components/header.php'); ?>
      <main class="main">
        <section class="section block-contact is-mode bg-0">
          <div class="container">
            <h2 class="display-1 color-700 mb-30 grow-up scroll-zoom-in">Kapcsolat</h2>

            <div class="row mt-60">
              <div class="col-lg-4">
                <div class="card-contact">
                  <div class="contact-icon"><img src="assets/imgs/page/homepage2/touch1.svg" alt="neuron"></div>
                  <div class="contact-info">
                    <h4 class="color-900 card-title">Iroda</h4>
                    <p class="font-md color-600">Cím: 7400 Kaposvár,<br> Damjanich utca 17<br>Telefon: <a href="tel:+36306648937">(+36) 30 664 8937</a><br>E-mail: <a href="mailto:info@kiakk.hu">info@kiakk.hu</a></p>
                  </div>
                </div>
                <div class="card-contact">
                  <div class="contact-icon"><img src="assets/imgs/page/homepage2/touch1.svg" alt="neuron"></div>
                  <div class="contact-info">
                    <h4 class="color-900 card-title">Studió</h4>
                    <p class="font-md color-600">Cím: 7400 Kaposvár,<br> Damjanich utca 17<br>Telefon: <a href="tel:+36306648937">(+36) 30 664 8937</a><br>E-mail: <a href="mailto:info@kiakk.hu">info@kiakk.hu</a></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-in-touch position-relative">
                  <div class="image-mark-scroll"></div>
                  <form action="contact.php" method="post" onsubmit="return sendForm()">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Teljes név" id="name">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Telefonszám" id="phone-number" oninput="formatPhoneNumber(this)">  
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Email cím" id="email-address">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Tárgy">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <textarea class="form-control" rows="6" placeholder="Üzenet"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="box-button-touch">
                          <div class="form-group">
                            <button class="btn btn-black">Üzenet küldése<img src="assets/imgs/template/icons/arrow.svg" alt="neuron"></button>
                          </div>
                          <div class="agree-cb color-600">
                            <input class="cb-agree" type="checkbox">A kapcsolatfelvétel gombra kattintva Ön elfogadja feltételeinket és szabályzatunkat.
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="block-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2753.369275933826!2d17.7972176!3d46.362061000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47683e000240052b%3A0x3b1f6a2a20645b22!2zS2Fwb3N2w6FyaSBTWkMgRcO2dHbDtnMgTG9yw6FuZCBNxbFzemFraSBUZWNobmlrdW0gw6lzIEtvbGzDqWdpdW0!5e0!3m2!1shu!2shu!4v1698227964602!5m2!1shu!2shu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
      </main>
      <?php require_once("components/footer.php"); ?>
    </div>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("components/scripts.php"); ?>
    <script>
function formatPhoneNumber(input) {
  var phoneNumber = input.value.replace(/\D/g, ''); // Eltávolítja az összes nem-számszerű karaktert
  var originalCursorPosition = input.selectionStart; // Az eredeti kurzor pozíciója

  if (phoneNumber.length > 11) {
    phoneNumber = phoneNumber.slice(0, 11);
  }

  var formattedPhoneNumber = '+36 ';

  var cursorOffset = 1; // Alapértelmezett kurzor eltolás

  if (originalCursorPosition <= 3) {
    cursorOffset = 4;
  }

  for (var i = 2; i < phoneNumber.length; i++) {
    if (i === 4 || i === 7) {
      formattedPhoneNumber += ' ';
      if (i < cursorOffset) {
        cursorOffset++;
      }
    }

    formattedPhoneNumber += phoneNumber.charAt(i);

      if (i === originalCursorPosition - 2) {
    cursorOffset--;
    }
  }

  // Visszaállítjuk az input mező tartalmát
  input.value = formattedPhoneNumber;

  // Beállítjuk a kurzort az új pozícióba
  var newCursorPosition = originalCursorPosition + cursorOffset;
  input.setSelectionRange(newCursorPosition, newCursorPosition);
}

  function sendForm() {
  // Minden mező kitöltöttségének ellenőrzése
  const elements = document.querySelectorAll('.form-control');
  for (let i = 0; i < elements.length - 1; i++) {
    if (elements[i].value === "") {
      alert('Minden mezőt ki kell tölteni!');
      return false; // Ha van hiányzó mező, visszaadunk false értéket
    }
  }

  // Email ellenőrzése
  const email = document.getElementById("email-address").value;
  const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  if (!emailRegex.test(email)) {
    alert('Hibás email cím formátum!');
    return false; // Ha hibás email cím, visszaadunk false értéket
  }

  // Név ellenőrzése
  const name = document.getElementById("name").value;
  if (!/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
    alert('Hibás név formátum!');
    return false; // Ha hibás név, visszaadunk false értéket
  }

  // Üzenet ellenőrzése
  const message = document.querySelector('textarea.form-control').value;
  if (message.trim() === "") {
    alert('Az üzenet mezőt ki kell tölteni!');
    return false; // Ha üres az üzenet mező, visszaadunk false értéket
  }

  return true; // Ha minden ellenőrzés sikeres, visszaadunk true értéket
}

</script>

</body>
</html>