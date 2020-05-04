<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags always come firt -->
	<title>BELAJAR CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>

	<div id="wrapper">
		<nav class="navbar navbar-light bf-faded">
			<a class="navbar-brand" href="https://galihboim07.blogspot.com/">WEB PROGRAMMING 1</a>
			<ul class="nav navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=add">Tambah Data</a>
				</li>
			</ul>
		</nav>

		<div class="container box">
			<?php include "pages.php";?>
		</div>

	</div>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('alamat',{height: 300} );
	</script>
</body>
</html>