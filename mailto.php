<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$inquiry = $_POST['inquiry'];

			if(mb_send_mail($name, $mail, $inquiry)){
				echo "メールを送信しました";
			} else {
				echo "メールの送信に失敗しました";
			}
		?>
	</body>
</html>
