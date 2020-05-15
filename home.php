<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Start Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
		type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>

<body>
	<header class="container-fluid">

	    <nav class="navbar fixed-top navbar-dark navbar-expand-lg">
	    	<a href="home.php" class="navbar-brand" target="_self">
				<img src="assets/images/essve-logo.jpg" class="img-fluid logo-header" alt="Webpage Logo - responsive image">
            </a>

	    	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

	    	<div class="navbar-collapse collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mr-auto">
    				<li class="nav-item mr-2"><a class="nav-link margin-adjust" href="inredning.html">Inredning</a></li>
	    			<li class="nav-item mr-2"><a class="nav-link" href="marknadsmatr.html">Marknadsmaterial</a></li>
					<li class="nav-item mr-2"><a class="nav-link" href="giveaway.html">Give away</a></li>
			        <li class="nav-item mr-2 nav-link social-icon">
						<span><i class="fa fa-list-alt"></i></span>
						
						<button type="button" class="btn btn-link" data-toggle="modal" data-target="#hemfixModal">
                            <span><i class="fa fa-user-circle-o"></i></span>
						</button>

			    	    <a href="logout.php"><span><i class="fa fa-sign-out"></i></span></a>
			        </li>
				</ul>		
			</div>
		</nav>

		<div class="modal" id="hemfixModal" tabindex="-1" role="dialog" aria-labelledby="hemfixModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
						<h2 class="text-center" id="hemfixModalLabel">Profile Page</h2>
						<p class="text-center">Your account details are below:</p>
					</div>
					<div class="modal-body">
						<table>
							<tr>
								<td><strong>Username:</strong></td>
								<td><?=$_SESSION['name']?></td>
							</tr>
							<tr>
								<td><strong>Password:</strong></td>
								<td>**********</td>
							</tr>
							<tr>
								<td><strong>Email:</strong></td>
								<td><?=$email?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container-fluid callout-container">
		<div class="row">
			<div class="col-12">
				<section class="callout jumbotron">
					<h2 class="text-center">Home</h2>
					<p class="text-center">Populära artiklar:</p>
					<div class="text-center">
						<p>Lorem Ipsum</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>