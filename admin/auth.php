<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="../common-css/ionicons.css" rel="stylesheet">

	<link href="../01-homepage/css/stylelogin.css" rel="stylesheet">

    <link href="../01-homepage/css/responsive.css" rel="stylesheet">



</head>
<body>
 
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="form" action="" method="post">
                
                <div class="form-group">
                    <label for="username">Pseudo:</label>
                    <input type="text" class="form-control username" id="username" placeholder="Pseudoname..." name="username">
                </div>
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="text" class="form-control username" id="email" placeholder="Email..." name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control password" id="password" placeholder="Password..." name="password">
                </div>
                <?php include 'login.php';?>
                <button type="submit" name ="submit" class="btn btn-primary btn-customized">Se connecter</button>
                
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>
    <!-- SCIPTS -->
</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<script src="../common-js/jquery-3.1.1.min.js"></script>

	<script src="../common-js/tether.min.js"></script>

	<script src="../common-js/bootstrap.js"></script>

	<script src="../common-js/layerslider.js"></script>

	<script src="../common-js/scripts.js"></script>
</body>
</html>