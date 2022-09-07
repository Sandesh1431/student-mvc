
   <?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="form-group">
      <form class="formlr" action="<?php echo URLROOT . 'pages/register' ?>" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="log" name="username" placeholder="Username"  required autofocus>
        <input type="text" class="log" name="email" placeholder="Email Adress" required autofocus>
        <input type="password" class="log" name="password" placeholder="Password" required autofocus>
        <input type="submit" name="submit" value="Register" class="btnlog">
        <?php if(isset($data))
      {
        error_reporting(E_ALL ^ E_WARNING); 
          $data = $data['message'];
          echo "<p id='time' style='color:blue;'> $data </p>";
      }
        ?>
        <p class="link"><a  class="link" href="<?php echo URLROOT . 'pages/login' ?>">Click to Login</a></p>
    </form>
    </div>
