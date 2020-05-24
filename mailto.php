<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

      if (!empty($_POST["to"])) {
            $to = $_POST['to'];
        }
      if (!empty($_POST["to"])) {
            $subject = $_POST['subject'];
        }
      if (!empty($_POST["message"])) {
            $message = $_POST['message'];
        }
        
      $additional_headers = 'From: takekazaaaaaa@gmail.com';

			if(mb_send_mail($to, $subject, $message, $additional_headers)){
				$alert = "メールを送信しました";
			} else {
				$alert = "メールの送信に失敗しました";
			}
      echo $alert;
		?>
	</body>
</html>
