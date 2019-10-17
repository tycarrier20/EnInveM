<?php
	require "header.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Showcase For Hope | IMS Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="CSS/login.css">-->
  </head>
  <body class="bg-dark">

    <div class="container col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
      <br><br><br><br><br>
      <div class="col-12">
        <div class="card" style="font-family: 'Questrial', sans-serif; color:green;">
          <div class="card-header text-center" style="color:green;">

              <h1 class="card-title" style="opacity:none;">Showcase for Hope | I.M.S. Login</h1>

          </div>
          <div class="card-body">
            <br>
            <form class="" action="Includes/login.inc.php" method="post">
              <div class="form-group">
                <h5><i class="fas fa-user"></i> Username:</h5>
                <?php
									echo '<input class="form-control" name="uid" placeholder="Ex. ILoveCodeNet" style="color:green;"/>';
                ?>
              </div>
              <div class="form-group">
                <h5><i class="fas fa-lock"></i> Password:</h5>
								<?php
									echo '<input type="password" class="form-control" name="pwd" placeholder="Ex. CodeNetIzC001" style="color:green;"/>';
								?>
                <a href="#" style="color:green;"><small>Forgot Password?</small></a>
              </div>
							<?php
								echo '<button name="login-submit" type="submit" class="btn float-right" style="background-color:green; color:White;"><i class="fas fa-user-lock"></i> Login</button>';
								?>
            </form>
            <br><br>
            <div class="col-12 text-center">
              <small>Created by the Cairn University CodeNet team.</small>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
