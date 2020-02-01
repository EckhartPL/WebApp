<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navtop">
	<div class = "content">
		<h1><a href="home.php">Web App</a></h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profil</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Wyloguj</a>
			<a href="Ulubione.php"><i class="fa fa-star"></i>Ulubione</a>
			<a href="Kategorie.php"><i class="fa fa-map-signs"></i>Kategorie</a>
			<a href="upload.php"><i class="glyphicon glyphicon-cloud-upload"></i>Dodaj</a>
		<form action="search.php" method="POST">
			<input type="text" name="search" placeholder="Wyszukaj">
			<button type="submit" name="search-button">Szukaj</button>
		</form>
	</div>
</nav>