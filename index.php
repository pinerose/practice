<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>pagename</title>
	</head>
	<body>
		<h1><a href="index.php"></a></h1>
		<ol>
			<li><a href="index.php?id=first"></a></li>
			<li><a href="index.php?id=second"></a></li>
			<li><a href="index.php?id=third"></a></li>
		</ol>
		<h2>
			<?php
			if(isset($_GET['id'])) {
				echo $_GET['id'];
			} else {
				echo 'Welcome';
			}
			?>
		</h2>
		<?php
		if(isset($_GET['id'])){
			echo file_get_contents("data/".$_GET['id']);
		} else {
			echo "Hello, visitor";
		}
		?>
	</body>
</html>
