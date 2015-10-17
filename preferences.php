<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FoodBuddy Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
	<link href="css/preferences-page.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="shop.php">FoodBuddy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>

                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="Q&AForLogedIn.html">Q&A</a>
                    </li>
                    <li>
                        <a href="#">Log Off</a>
                    </li>
                </ul>
			
            </div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
    </nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Profile - Edit Preferences<span class= "glyphicon glyphicon-user"></span></h2>
				</form>
			</div>
		</div>
	</div>
	
	<br>
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-12">
			<?php echo '<form action="shop.php" method="post">';?>
                <div class="row">
				<p><b>Dietary Preferences:</b></p>
				<input type="checkbox" name="diet" value="Vegan">Vegan<br>
				<input type="checkbox" name="diet" value="Vegetarian">Vegetarian<br>
				<input type="checkbox" name="diet" value="Dairy-Free">Dairy-Free<br>
				<input type="checkbox" name="diet" value="Kosher">Kosher<br>
				<input type="checkbox" name="diet" value="Gluten-Free">Gluten-Free<br>
				<input type="checkbox" name="diet" value="Low-Carb">Low-Carb<br>
				<input type="checkbox" name="diet" value="Paleo">Paleo<br>
				<input type="checkbox" name="diet" value="N/A">N/A<br>
				</form>
				
				<br>
				
				<p><b>Health Restrictions:</b></p>
				<input type="checkbox" name="health" value="Celiac's Disease">Celiac's Disease<br>
				<input type="checkbox" name="health" value="Diabetes">Diabetes<br>
				<input type="checkbox" name="health" value="Crohn's Diseas">Crohn's Disease<br>
				<input type="checkbox" name="health" value="Colitis">Colitis<br>
				<input type="checkbox" name="health" value="Hypoglycemia">Hypoglycemia<br>
				<input type="checkbox" name="health" value="Irritable Bowel Syndrome">Irritable Bowel Syndrome<br>
				<input type="checkbox" name="health" value="N/A">N/A<br>
				<br>
				<?php 
				
				echo '<button type="submit" class="submitbut" value="Save">Save</button>
				<br> <br>
				<a href="profile.html" class="button">Return to Profile</a>
				</form>'; ?>
           
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team 14</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>