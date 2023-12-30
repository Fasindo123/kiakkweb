<?php

use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

require 'dashboard/libs/PHPMailer/class.phpmailer.php';
require 'dashboard/libs/PHPMailer/class.pop3.php';
require 'dashboard/libs/PHPMailer/class.smtp.php';
require 'dashboard/libs/PHPMailer/PHPMailerAutoload.php';

$MAIL_TYPE = "null";

if(isset($_POST['kuldes'])) {

    // ügyfélnek
    $mail2 = new \PHPMailer();
    $mail2->IsSMTP();     
    // $mail2->SMTPDebug = 2;                                     // SMTP-n keresztuli kuldes
    $mail2->Host     = 'smtp.office365.com';                     // SMTP szerverek
    $mail2->Port = 587;
    $mail2->SMTPAuth = true;                                   // SMTP
    $mail2->SMTPSecure = 'STARTTLS';

    $mail2->Username = 'huberpetergyorgy@outlook.hu';            // SMTP felhasználo
    $mail2->Password = 'Peti.2006.Mazli';                               // SMTP jelszo

    $mail2->CharSet = 'UTF-8';
    $mail2->From     = 'huberpetergyorgy@outlook.hu';            // Felado e-mail cime
    $mail2->FromName = 'huberpetergyorgy@outlook.hu';                // Felado neve
//    $mail2->AddAddress('tamas@bloch.hu', 'Bloch Tamás');         // Cimzett es neve
    $mail2->AddAddress('huberpetergyorgy@gmail.com', 'Huber Péter György');         // Cimzett es neve
    $mail2->AddAddress('huberpetergyorgy@outlook.hu', 'Huber Péter György');         // Cimzett es neve
    $mail2->AddReplyTo('huberpetergyorgy@outlook.hu', 'Huber Péter György');
    $mail2->WordWrap = 80;                                     // Sortores allitasa
    $mail2->IsHTML(true);                                      // Kuldes HTML-kent

    $targy = 'KIAKK';
    $data2 = 'Köszönjük szépen levelét, megkaptuk!';

    $mail2->Subject = $targy;                   // A level targya
    $mail2->Body    = $data2;          // A level tartalma
    //				$mail2->AltBody = 'Csak szöveg';            // A level szoveges tartalma
    $mail2->Send();
    // magunknak
    //  echo '<script type="text/javascript" charset="utf-8">alert("Köszönjük az email-jét!"</script>';
}

//  if(isset($_POST['submitButton1'])) {
// 	$check = "SELECT email FROM `` WHERE email = '".$_field_21."';";
//     $check2 = mi_sql(5, $check);

//     if (right($_field_21,2) == "ru" || right($_field_21,2) == "pl")
//     {
//         echo '<script type="text/javascript" charset="utf-8">alert("Érvénytelen email cím!");</script>';
//         echo '<META HTTP-EQUIV="refresh" CONTENT="2;url='.$_SERVER['PHP_SELF'].'?clear="'.rand(100, 999).'">';
// 	} else if (empty(trim($_field_11, " ")) ||empty(trim($_field_11, " ")) )
// 	{
// 		echo '<script type="text/javascript" charset="utf-8">alert("Kérem javítsa ki a hibákat. A csillaggal (*) jelölt mezők kötelezőek!");</script>';
// 		echo '<META HTTP-EQUIV="refresh" CONTENT="2;url='.$_SERVER['PHP_SELF'].'?clear="'.rand(100, 999).'">';
// 	} else if ($check2->num_rows > 0)
//     {
// 		echo '<script type="text/javascript" charset="utf-8">alert("Ez az email cím már regisztrálva van.'.$_field_21.'");</script>';
// 	 	echo '<META HTTP-EQUIV="refresh" CONTENT="2;url=http://www.zsotakerekpartura.hu/index.php?clear="'.rand(100, 999).'">';
//     } else {
// 		$insert = "INSERT into `jelentkezesek` (`name`, `email`, `enabled`) VALUES ('" . $_field_11 . "','" . $_field_21 . "', 0)";
// 	    $insert2 = mi_sql(5, $insert);
// 	    if ($insert2)
// 	    {
//             $fejlecek .= 'MIME-Version: 1.0' . "\r\n";
//             $fejlecek .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
//             $fejlecek .= 'From: info@zsotakerekpartura.hu '. "\r\n";
// 			$data = "Regisztrációs adatok:<br /><br />Név: " . $_field_11 . "<br />Email: " . $_field_21;
// 			$data = iconv("UTF-8", "UTF-8", $data); 
// 			mail("tamas@bloch.hu","Zsota reg",$data, $fejlecek, "-f info@zsotakerekpartura.hu");
// 			mail("muzsizsolt@gmail.com","Zsota reg",$data, $fejlecek, "-f info@zsotakerekpartura.hu");
// 		 	echo '<script type="text/javascript" charset="utf-8">alert("Köszönjük a feliratkozást! Hamarosan jelentkezünk.");</script>';
// 		 	echo '<META HTTP-EQUIV="refresh" CONTENT="2;url=http://www.zsotakerekpartura.hu/index.php?clear="'.rand(100, 999).'">';
// 	 	}
//  	}
// }
?>