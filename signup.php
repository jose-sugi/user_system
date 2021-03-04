<?php 
	include(dirname(__FILE__) . '/php_function.php');//PHP関数ファイルの読み込み
	include(dirname(__FILE__) . '/js_function.php');//JS関数ファイルの読み込み
	include(dirname(__FILE__) . '/js_function_sec.php');//JS関数ファイルの読み込み
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up</title>
	    <link rel="stylesheet" href="style.css">
	    <script src="https://kit.fontawesome.com/9f015e8d67.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container con_sinup">
		<div class="box">
			<form name="form1" action="check.php" method="post" onsubmit="return check_signup_submit();">
					<input type="text" class="dummy" disabled>
				<p>name<span>※255文字以内</span></p><input type="text" name="name" autocomplete="off" onchange="check_input(this.name);" required>
					<input type="email" class="dummy" disabled>
				<p>mail<span></span></p><input type="email" name="mail" autocomplete="off" onchange="check_input(this.name);" required>
				 	<input type="password" class="dummy" disabled>
				<p>password<span>※6桁〜10桁の英数字</span></p><input type="password" name="passwd" autocomplete="off" onchange="check_input(this.name);" required>
					<input type="submit" value="Sign Up" class="button_left button_right bt_sinpu">
			</form>	
		</div>
	</div>
	<a onclick="history.back()" href="#" class="arrow_back"><i class="far fa-arrow-alt-circle-left fa-3x"></i></a>
</body>
</html>