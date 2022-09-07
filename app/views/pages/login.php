
<?php require APPROOT . '/views/inc/header.php'; ?>
   <form  class = "formlr"  action = "<?php echo URLROOT . 'pages/login' ?>" method = "post" name     = "login">
   <h1    class = "login-title">Login</h1>
   <input type  = "text" class     = "log" name   = "adminId" placeholder  = "AdminID" autofocus = "true" required/>
   <input type  = "password" class = "log" name  = "password" placeholder = "Password" required/>
   <input type  = "submit" value   = "Login" name = "submit" class = "btnlog"/>
        <?php if(isset($data))
        
        {
        error_reporting(E_ALL ^ E_WARNING); 
            $data = $data["message"];
            echo "<p  style='color:red;'> $data </p>";
        } ?>
        <p class = "link"><a href = "registration.php" class = "link">New Registration</a></p>
  </form>