<?php
class Model extends Database{


//registraion function
  public function register($array)
  {
     $adminId = $array[0];
     $email   = $array[1];
     $pass    = $array[2];
     $this->query("INSERT INTO admin(adminId,password,email)VALUES('$adminId','$pass','$email')");
    return $this->execute();
  }

//login function
  public function Enter($array)
  {
    $adminId  = $array[0];
 
    $password = $array[1];
    $this->query("SELECT * FROM admin WHERE adminId = '$adminId' AND password = '$password'");
    return $this->resultSet();
  }

    //   function student insertion
    public function Sinsert($postData)
    {
      if(isset($postData['submit']))
      {
      $student = $postData['student'];
      $stdID   = $postData['stdID'];
      $this->query("INSERT INTO students(std_name,id)VALUES('$student','$stdID')");
            return $this->execute();
      }
    }
    //function teacher insertion
  public function Tinsert($postData)
      {
          $teacher = $postData['teacher'];
          $teachID = $postData['teachID'];
          $disg    = $postData['disg'];
          $ID      = $this->query("SELECT * FROM teachers WHERE id = '$teachID' ");
          $ID      = $this->resultSet();
            if($ID[0]->id == $teachID)
            {
              return $this->resultSet();
            }
          $this->query("INSERT INTO teachers(name,id,disg)VALUES('$teacher','$teachID','$disg')");
          return $this->execute();
        }
     //   function Display students and teacher
  // public function display1($postData)
  public function teacher($postData)
  {
    if(isset($postData['disp'])){
      $ID = $_POST['id'];
      $this->query("SELECT std_name, name FROM students JOIN teachers ON students.id = teachers.id WHERE teachers.id =  $ID");
      return $this->resultSet();
    }
  }
 }
   
   
        
         