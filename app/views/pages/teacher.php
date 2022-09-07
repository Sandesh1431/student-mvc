


<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php
    include('nav.php');
?>     
<div  class  = "container">
<div  class  = "row justify-content-md-center">
<div  class  = "col-4">
<form action = "<?php echo URLROOT. 'pages/saved' ?>" method = "post">
<div  class  = "form-group" style    = "margin-top: 7em;">
<h1   class  = "train">Trainer Registration</h1>
    </div>
   <div class = "form-group">
     <div>
   <label  for   = "">Trainer Name:</label>
   <input  type  = "text" name   = "teacher"class  = "logs" placeholder = "Enter Teacher Name" required>
   <label  for   = "">ID:</label>
   <input  type  = "text" name   = "teachID" class = "logs" placeholder = "Enter Id" required>
   <label  for   = "">Disgnation:</label>
   <input  type  = "text" name   = "disg" class    = "logs" placeholder = "Enter Disgnation" required>
  <?php
  error_reporting(E_ALL ^ E_WARNING); 
          $det = $data['message'];
          echo "<p > $det </p>";
          echo $data2['message'];
        ?>
   <button class = "btnss"  type = "submit" name   = "sub" >Submit</button>
    </form> 
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
