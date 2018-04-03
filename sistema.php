<!DOCTYPE html>
<html>
	<?php
		session_start();
		error_reporting(0);
		$varsesion = $_SESSION['username'];
		$varsesion = $_SESSION['password'];

		if ($varsesion == null || $varsesion = '') {
		Include('401.php');
		die();
	 }
	?>
<body>
	<head>
		<meta charset="utf-8">
		<title>Sistema Domótico</title>
		<meta name="viewport" content="width=device-width, initial-scale=0.6">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="css/bg.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
		<div>
				<div class="d-flex justify-content-end">
					<div class="col-2">
						<div class="font-weight-bold">
							<a href="logout.php">Cerrar Sesión</a>
						</div>
					</div>
				</div>
				<form class="col-12 text-center" action="" method="post">
					<div class="p-2">
						<div class="text-center">
							<div class="col-12 text-white">
									<p class="font-weight-bold">Control Relay GPIO 02</p>
									 <button type="submit" class="btn btn-success" name="GPOI02_1" value="ON">ON</button>
									 <button type="submit" class="btn btn-danger" name="GPIO02_0" value="OFF">OFF</button>
							</div>
						</div>
					</div>
					<div class="p-2">
						<div class="text-center">
							<div class="col-12 text-white">
									<p class="font-weight-bold">Control Relay GPIO 03</p>
									 <button type="submit" class="btn btn-success" name="GPOI03_1" value="ON">ON</button>
									 <button type="submit" class="btn btn-danger" name="GPIO03_0" value="OFF">OFF</button>
							</div>
						</div>
					</div>
					<div class="p-2">
						<div class="text-center">
							<div class="col-12 text-white">
									 <p class="font-weight-bold">Control Relay GPIO 04</p>
										<button type="submit" class="btn btn-success" name="GPOI04_1" value="ON">ON</button>
										<button type="submit" class="btn btn-danger" name="GPIO04_0" value="OFF">OFF</button>
							</div>
						</div>
					</div>
						<div class="p-2">
							<div class="text-center">
							 <div class="col-12 text-white">
										 <p class="font-weight-bold">Control Relay GPIO 17</p>
										 <button type="submit" class="btn btn-success" name="GPOI17_1" value="ON">ON</button>
										 <button type="submit" class="btn btn-danger" name="GPIO17_0" value="OFF">OFF</button>
								</div>
						 </div>
					 </div>
						 <div class="p-2">
							 <div class="text-center">
								 <div class="col-12 text-white">
											 <p class="font-weight-bold">Control Relay GPIO 18</p>
											 <button type="submit" class="btn btn-success" name="GPOI18_1" value="ON">ON</button>
											 <button type="submit" class="btn btn-danger" name="GPIO18_0" value="OFF">OFF</button>
								 </div>
							 </div>
						 </div>
						 <div class="p-2">
							 <div class="text-center">
								 <div class="col-12 text-white">
										 <p class="font-weight-bold">Control Relay GPIO 22</p>
											<button type="submit" class="btn btn-success" name="GPOI27_1" value="ON">ON</button>
											<button type="submit" class="btn btn-danger" name="GPIO27_0" value="OFF">OFF</button>
								 </div>
							 </div>
						 </div>
						 <div class="p-2">
							 <div class="text-center">
								 <div class="col-12 text-white">
										 <p class="font-weight-bold">Control Relay GPIO 23</p>
											<button type="submit" class="btn btn-success" name="GPOI22_1" value="ON">ON</button>
											<button type="submit" class="btn btn-danger" name="GPIO22_0" value="OFF">OFF</button>
								 </div>
							 </div>
						 </div>
						 <div class="p-2">
							 <div class="text-center">
								 <div class="col-12 text-white">
											<p class="font-weight-bold">Control Relay GPIO 27</p>
											 <button type="submit" class="btn btn-success" name="GPOI23_1" value="ON">ON</button>
											 <button type="submit" class="btn btn-danger" name="GPIO23_0" value="OFF">OFF</button>
								 </div>
							 </div>
					 </div>
				</form>
	 	</div>
		<?php
						// Funciones PHP del pin GPIO 02
					if ($_POST[GPOI02_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO02/GPIO02_0.py");}

					if ($_POST[GPIO02_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO02/GPIO02_1.py");
																						}
	         // Funciones PHP del pin GPIO 03
					if ($_POST[GPOI03_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO03/GPIO03_0.py");}

				  if ($_POST[GPIO03_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO03/GPIO03_1.py");}

					// Funciones PHP del pin GPIO 04
					if ($_POST[GPOI04_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO04/GPIO04_0.py");}

					if ($_POST[GPIO04_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO04/GPIO04_1.py");}

	        // Funciones PHP del pin GPIO 17
					if ($_POST[GPOI17_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO17/GPIO17_0.py");}

					if ($_POST[GPIO17_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO17/GPIO17_1.py");}

	       // Funciones PHP del pin GPIO 18
					if ($_POST[GPOI18_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO18/GPIO18_0.py");}

					if ($_POST[GPIO18_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO18/GPIO18_1.py");}

	       // Funciones PHP del pin GPIO 22
				  if ($_POST[GPOI22_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO22/GPIO22_0.py");}

					if ($_POST[GPIO22_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO22/GPIO22_1.py");}

	       // Funciones PHP del pin GPIO 23
				  if ($_POST[GPOI23_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO23/GPIO23_0.py");}

					if ($_POST[GPIO23_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO23/GPIO23_1.py");}

	       // Funciones PHP del pin GPIO 27
					if ($_POST[GPOI27_1]) {exec("sudo python /var/www/pidomo.mx/py/GPIO27/GPIO27_0.py");}

					if ($_POST[GPIO27_0]) {exec("sudo python /var/www/pidomo.mx/py/GPIO27/GPIO27_1.py");}
			?>
	</body>
</html>
