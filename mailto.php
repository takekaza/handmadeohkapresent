<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

      if (!empty($_POST["subject"])) {
            $subject = $_POST['subject'];
        }
      if (!empty($_POST["to"])) {
            $to = $_POST['to'];
        }
      if (!empty($_POST["message"])) {
            $message = $_POST['message'];
        }
			// $subject = $_POST['subject'];
			// $to = $_POST['to'];
			// $message = $_POST['message'];
      $header = "From: takekazaaaaaa@gmail.com";

			if(mb_send_mail($to, $subject, $message, $header)){
				echo "メールを送信しました";
			} else {
				echo "メールの送信に失敗しました";
			}
		?>
	</body>
</html>
