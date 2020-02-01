<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}

include 'navbar.php';
include 'news.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Strona główna</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	
<body class="loggedin">
<div class="article-container">
	<?php
		$db = mysqli_connect('localhost', 'root', '', 'loginpage');
		$sql= "SELECT * FROM books";
		$result=mysqli_query($db, $sql);
		$queryResult=mysqli_num_rows($result);

		if($queryResult > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<div class='article-box'>
					<h3>".$row['title']."</h3>
					<p>".$row['author_name']." ".$row['author_surname']."</p>
					<p>".$row['description']."</p>
				</div>";
			}
		}
	?>
</div>
</body>
</html>