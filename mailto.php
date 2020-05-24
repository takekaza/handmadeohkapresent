<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			$subject = $_POST['subject'];
			$to = $_POST['to'];
			$message = $_POST['message'];

			if(mb_send_mail($to, $subject, $message, $additional_headers)){
				echo "メールを送信しました";
			} else {
				echo "メールの送信に失敗しました";
			}
		?>
	</body>
</html>
