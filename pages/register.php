<?php if(get_class() == null) {header('Location: /~kz233/mvc-mvc2/index.php');} ?>
<!doctype html>

<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Task system</title>
	<meta name='description' content='Sql Active Record'>
	<meta name='author' content='Kan'>
	<link rel='stylesheet' href='css/styles.css?v=1.0'>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">

		<p><?php foreach ($data as $key => $str) echo $str . "<br>";?></p>

		<input type="submit" value="Create An Account" name="submit">
		<input type="hidden" name="page" value="accounts">
		<input type="hidden" name="action" value="register">
		<input type="reset">
	</form>
</body>
</html>
