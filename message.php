<?php
  $app_name = $_POST["app"];
  $sender   = $_POST["sender"];
  $message  = $_POST["message"]; 

/* $app_name = "WhatsAuto"; */
/* $sender = "WhatsAuto app"; */
/* $message = "Login"; */


if ($app_name == "WhatsAuto") {
  if ($sender == "WhatsAuto app") {
     if ($message == "Test message") {
    $reply = array("reply" => "JANGAN BERI kode ini ke siapa pun, TERMASUK TEAM FORUM ALMAS. WASPADA PENIPUAN! UBAH PASSWORD, masukkan kode verifikasi (OTP) 414741.");
        echo json_encode($reply);

     }
}
}
?>
