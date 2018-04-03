<html>
  <head>
    <meta charset="utf-8"/>
  </head>
    <body>
        <link href="css/fondo.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/animation.js"></script>
      <div id="login-button">
        <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"></img>
      </div>
      <div id="container">
          <h1>Log In</h1>
            <span class="close-btn">
              <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>
              <form action="login.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="username" placeholder="username" id="username" required>
              <input type="password" name="password" placeholder="password" id="password" required>
              <input type="submit" name="Submit" value="Login">
              <!--<div id="remember-container">
             <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
            <span id="remember">Remember me</span>
            <span id="forgotten">Forgotten passwor</span>
          </div>-->
        </form>
      </div>
     <!--Forgotten Password Container
      <div id="forgotten-container">
        <h1>Forgotten</h1>
        <span class="close-btn">
         <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
       <form>
         <input type="email" name="email" placeholder="E-mail">
         <a href="#" class="orange-btn">Get new password</a>
       </form>
      </div>-->
    </body>
</html>
