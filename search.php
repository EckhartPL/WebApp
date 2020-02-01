<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wyszukiwanie</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
<div class="article-container">
	<?php
		if(isset($POST_['submit-search']))
		{
			$db = mysqli_connect('localhost', 'root', '', 'loginpage');
			$search=mysqli_real_escape_string($db, $POST_['search']);
			$sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author_name LIKE '%$search%' OR author_surname LIKE '%$search%' OR description LIKE '%$search%'";
			$result = mysqli_query($db, $sql);
			$queryResult = mysqli_num_rows($result);

			echo "There are ".$queryResult." results.";

			if($queryResult > 0)
			{
				while($row = mysqli_fetch_assoc($result)){
					echo 
					"<a href='article.php?title=".$row['title']."'><div class='article-box'>
						<h3>".$row['title']."</h3>
						<p>".$row['author_name']."</p>
						<p>".$row['author_surname']."</p>
						<p>".$row['description']."</p>
					</div></a>";
				}
			}else
			{
				echo "No results!"; 
			}
		}
	?>
</div>
</body>
</html>