<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>ä§æ</title>
</head>
<body>
<?php foreach ($query as $item):?>
	<li><?php echo $item -> id; ?></li>
	<li><?php echo $item -> username; ?></li>
	<li><?php echo $item -> password; ?></li>
 <?php endforeach;?>
 <form method="get" action="add">
		<br>username : <input type="text" name="u1" id="u1"></br>
		<br>password : <input type="text" name="p1" id="p1"></br>
		<input type="submit">
	</form>
 
</body>
</html>