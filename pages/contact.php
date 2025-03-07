<?php

$nev = "üres";
$email = "üres";

if (isset($_POST["nev"])) {
    $nev = $_POST["nev"];
    $email = $_POST["email"];
}

use \kiakkweb\PHPMailer\PHPMailer;
use \kiakkweb\PHPMailer\SMTP;
use \kiakkweb\PHPMailer\Exception;

require '../PHPMailer/class.phpmailer.php';
require '../PHPMailer/class.pop3.php';
require '../PHPMailer/class.smtp.php';


if(isset($_POST['kuldes'])) {

    // ügyfélnek
    $mail2 = new \PHPMailer();
    $mail2->IsSMTP();     
    // $mail2->SMTPDebug = 2;                                     // SMTP-n keresztuli kuldes
    $mail2->Host     = 'smtp.office365.com';                     // SMTP szerverek
    $mail2->Port = 587;
    $mail2->SMTPAuth = true;                                   // SMTP
    $mail2->SMTPSecure = 'STARTTLS';

    $mail2->Username = 'info@kiakk.hu';            // SMTP felhasználo
    $mail2->Password = '';                               // SMTP jelszo

    $mail2->CharSet = 'UTF-8';
    $mail2->From     = 'info@kiakk.hu';            // Felado e-mail cime
    $mail2->FromName = 'Kaposvári Informatika Ágazati Képzőközpont';                // Felado neve
//    $mail2->AddAddress('tamas@bloch.hu', 'Bloch Tamás');         // Cimzett es neve
    $mail2->AddAddress($email, $nev); // Felhasználó által megadott e-mail cím és név
    $mail2->AddAddress('info@kiakk.hu', 'Kaposvári Informatika Ágazati Képzőközpont');         // Cimzett es neve
    $mail2->AddReplyTo('info@kiakk.hu', 'Kaposvári Informatika Ágazati Képzőközpont');
    $mail2->WordWrap = 80;                                     // Sortores allitasa
    $mail2->IsHTML(true);                                      // Kuldes HTML-kent

    $targy = 'Kaposvári Informatika Ágazati Képzőközpont';
    $data2 = 'Köszönjük szépen levelét, megkaptuk!';

    $mail2->Subject = $targy;                   // A level targya
    $mail2->Body    = $data2;          // A level tartalma
    //				$mail2->AltBody = 'Csak szöveg';            // A level szoveges tartalma
    $mail2->Send();
    // magunknak
    //  echo '<script type="text/javascript" charset="utf-8">alert("Köszönjük az email-jét!"</script>';
}
?>
<!DOCTYPE html>
<html lang="hu">
<?php require_once('../components/head.php'); ?>
<body>
      <?php require_once('../components/loader.php'); ?>
      <?php require_once('../components/mobile-menu.php'); ?>
      <?php require_once('../components/header.php');
      ?>
      <main class="main">
            <div class="container">
            <h2 class="display-1 text-center mb-30 mt-200">Kapcsolat</h2>

            <div class="row mt-60">
              <div class="col-lg-4">
                <div class="card-contact">
                  <div class="contact-icon"><img src="../assets/imgs/page/touch1.svg" alt="kiakk"></div>
                  <div class="contact-info">
                    <h4 class=" card-title">Képzőközpont</h4>
                    <p class="font-md"><i class="fa-solid fa-location-dot"></i> 7400 Kaposvár, <br> Damjanich utca 17.<br><i class="fa-solid fa-phone"></i> (+36) 30 664 8937<br><i class="fa-solid fa-envelope"></i> info@kiakk.hu</p>
                  </div>
                </div>
                <!-- <div class="card-contact">
                  <div class="contact-icon"><img src="assets/imgs/page/touch1.svg" alt="kiakk"></div>
                  <div class="contact-info">
                    <h4 class="color-0 card-title">Studió</h4>
                    <p class="font-md color-600">Cím: 7400 Kaposvár,<br> Damjanich utca 17<br>Telefon: <a href="tel:+36306648937">(+36) 30 664 8937</a><br>E-mail: <a href="mailto:info@kiakk.hu">info@kiakk.hu</a></p>
                  </div>
                </div> -->
              </div>
              <div class="col-lg-8">
                <div class="form-in-touch position-relative">
                  <div class="image-mark-scroll"></div>
                  <form action="contact.php" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Teljes név" id="nev" name="nev">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Telefonszám" id="telefonszam"  name="telefonszam" oninput="formatTelefonszam(this)">  
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Email cím" id="email" name="email">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Tárgy" id="targy" name="targy">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <textarea class="form-control" rows="6" placeholder="Üzenet" id="uzenet" name="uzenet" oninput="uzenetdoboz(this);"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="box-button-touch">
                          <div class="form-group">
                            <button class="btn btn-black" type="submit" name="kuldes" id="kuldes" onclick="return sendForm();">Üzenet küldése<img src="../assets/imgs/template/arrow.svg" alt="küldés icon"></button>
                          </div>
                          <div class="agree-cb fw-bold">
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
      </main>
      <?php require_once("../components/footer.php"); ?>
    </div>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("../components/scripts.php"); ?>

<script>
  // Üzenet doboz folyamatosan növekedjen
  function uzenetdoboz(textarea) {
    textarea.style.height = "1px";
    textarea.style.height = (textarea.scrollHeight) + "px";
  }

  function formatTelefonszam(input) {
    var telefonszam = input.value.replace(/\D/g, ''); // Eltávolítja az összes nem-számszerű karaktert
    var originalCursorPosition = input.selectionStart; // Az eredeti kurzor pozíciója

    if (telefonszam.length > 11) {
      telefonszam = telefonszam.slice(0, 11);
    }

    var formattedtelefonszam = '(+36) ';

    var cursorOffset = 1; // Alapértelmezett kurzor eltolás

    if (originalCursorPosition <= 3) {
      cursorOffset = 4;
    }

    for (var i = 2; i < telefonszam.length; i++) {
      if (i === 4 || i === 7) {
        formattedtelefonszam += ' ';
        if (i < cursorOffset) {
          cursorOffset++;
        }
      }

      formattedtelefonszam += telefonszam.charAt(i);

        if (i === originalCursorPosition - 2) {
      cursorOffset--;
      }
    }

    // Visszaállítjuk az input mező tartalmát
    input.value = formattedtelefonszam;

    // Beállítjuk a kurzort az új pozícióba
    var newCursorPosition = originalCursorPosition + cursorOffset;
    input.setSelectionRange(newCursorPosition, newCursorPosition);
  }

  function sendForm() {
    const elements = document.querySelectorAll('.form-control');
    let isEmptyField = false;
    let errorMessages = '';

    for (let i = 0; i < elements.length; i++) {
      if (elements[i].value === "") {
        isEmptyField = true;
        elements[i].style.border = '3px solid red'; // Highlight the empty field
      } else {
        elements[i].style.border = ''; // Reset the border style
      }
    }

    if (isEmptyField) {
      errorMessages += 'Minden mezőt ki kell tölteni!\n';
    }

    const name = document.getElementById("nev").value;
      if (name !== "" && !/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
        errorMessages += 'Hibás név formátum!\n';
        document.getElementById("nev").style.border = '3px solid red'; // Highlight the name field
      }

    const email = document.getElementById("email").value;
      if (email !== "") {
        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        if (!emailRegex.test(email)) {
          errorMessages += 'Hibás email cím formátum!\n';
          document.getElementById("email").style.border = '3px solid red'; // Highlight the email field
        }
      }

    const telefonszam = document.getElementById("telefonszam").value.replace(/\D/g, '');
      if (telefonszam !== "" && telefonszam.length < 11) {
        errorMessages += 'Hibás telefonszám formátum!\n';
        document.getElementById("telefonszam").style.border = '3px solid red'; // Highlight the phone number field
      }

    if (errorMessages !== '') {
      alert(errorMessages.trim());
      return false;
    }

    return true;
  }

</script>

</body>
</html>