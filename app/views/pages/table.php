
     <?php require APPROOT . '/views/inc/header.php'; ?>
     <?php
    include('nav.php');
?>
<div class="container">
  <div class="row justify-content-md-center">
      <form action="<?php echo URLROOT. 'pages/tables' ?>" method="post">
      <div  class="form-group" style="margin-top: 7em;">
      <h1 class="align">Staff and Student Data</h1>
<div class="form-group">
  <div>
    <label>Teacher Id:</label>
  </div>
  <div class="form-group">
  <input type="number" class="logs"name="id" placeholder="Enter Teacher Id" required>
  </div>
  </div>

  <div class="form-group" style="display: flex;">
  <button class="btnss" type="submit" name="disp" role="button" >Print</button>

</div>
</form>
<div class="test"> 
<?php

if(isset($data))
error_reporting(E_ALL ^ E_WARNING); 
$data1 = $data[0]->name;
$dd = (array) $data;
// var_dump($dd);
echo "<h2 class='align'>Teacher name: $data1</h2>";

// var_dump($data);

{
?>
<table class='align'>
    <tr class="align">
        <th class="col col-1">
            Student name
        </th>
       
    
   
    <?php
    foreach($dd as $dd1)
{
    echo '<tr class="table-row">';

       echo '<td class="col col-1">' . $dd1->std_name . '</td>';

    ?>
       </tr>
    <?php
}
?>
</table>
<?php
}

?>
  </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>