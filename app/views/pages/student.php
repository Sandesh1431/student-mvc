
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
    include('nav.php');
?>    
<div class="container">
  <div class="row justify-content-md-center">
    <form action="<?php echo URLROOT. 'Pages/student_save' ?>" method="post">
    <div  class="form-group" style="margin-top: 7em;">
    <h1 class="align">Student Registration</h1>
  </div>
      <label>Student Name:</label>
      <div class="form-group">
    <input type="text" name="student"  class="log"id="student" placeholder="Enter Student Name" autofocus>
      </div>
    <div class="form-group">
     
      <label>Teacher ID:</label>
      <div class="form-group">
     <input type="text" id="sudent_form" class="log"   name="stdID" placeholder="Enter Teacher Id" autofocus > 

      </div>
      <div class="mess">
    
    <?php
    if(isset($_POST['submit']))
    {
      if(isset($data))
      {
          
          $info = $data['data'];
          echo "<p > $info </p>";
      }
    }
     
    ?>
      </div>
    <button class="btnss" type="submit" name="submit" role="button">Submit</button>
    </div>
    </form>
  </div>
  <?php require APPROOT . '/views/inc/footer.php';
   ?>