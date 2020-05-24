<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

      if (!empty($_POST["mail"])) {
            $mail = $_POST['mail'];
        }
      if (!empty($_POST["subject"])) {
            $subject = $_POST['subject'];
        }
      if (!empty($_POST["message"])) {
            $message = $_POST['message'];
        }

      $alert = "";
			if(mb_send_mail("takekazaaaaaa@gmail.com", $subject, $message, "From: ".$_POST["mail"])){
				$alert = "メールを送信しました";
			} else {
				$alert = "メールの送信に失敗しました";
			}
      echo $alert;
		?>
	</body>
</html>
