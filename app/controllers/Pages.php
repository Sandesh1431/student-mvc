<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    //Registration page/index
    public function index(){
      $data = [
        'title' => 'STUDENT DATABASE',
      ];
      $this->view('pages/index', $data);
    }


    //Teacher page
    public function teacher(){
      
      if(!isset($_SESSION['user'])){
        header("Location:login.php");
        echo ($_SESSION['user']);
       exit();
    

      }
      
      $data = [
        'title' => 'teacher details!',
      ];
     
      $this->view('pages/teacher', $data);
    }


//nav Bar
    public function nav()
    {
      $nav =[
   'message' => 'nav'
      ];
     $this->view('pages/nav' , $nav);
       }
//
      
       public function student_details()
      {
        if(!isset($_SESSION['user'])){
          header("Location:login.php");
          echo ($_SESSION['user']);
          exit();
        }
        $data =[

          'message' => 'student'
        ];
         $this->view('pages/student' , $data);
      }

//
      public function table()
      {
        if(!isset($_SESSION['user'])){
          header("Location:login.php");
          echo ($_SESSION['user']);
         exit();
      
  
        }
        $data =[

          'message' => 'table'
        ];
  
        $this->view('pages/table' , $data);
      }

   
      
    public function student_save()
    {
     
      if(isset($_POST['student'] )&& ( $_POST['stdID']))
      {
      $postData = $_POST;
      $model    = $this->model('Model');
      $model->Sinsert($postData);
      $data     = [
        'data' => 'Registered successfully!'
      ];
      $this->view('pages/student' , $data);
    }
    else
    {   
      $try =[
        'data' => 'Try again later!'
      ];
      $this->view('pages/student' , $try);
    }

    
  
    }



    public function saved()

    
    {
      echo ($_SESSION['user']);
      error_reporting(E_ALL ^ E_WARNING); 
      $model    = $this->model('Model');
      $postData = $_POST;
      if(isset($_POST['sub']))
      {
     $data   = $model->Tinsert($postData);
     $data1 = $data[0]->id;
     if($_POST['teachID'] ==  $data1)
     {
      $data =[
              'message' => 'Try again!'
      ];
     $this->view('pages/teacher' , $data);
     }
     if($_POST['teachID'] !=  $data1)
     {
      $data2 =[
        'message' => 'Registered successfully'
      ];
      $this->view('pages/teacher' , $data2);
     }
    
    }
   
    
  //   else{
  //     header("location:login.php");
  //     exit();

  // }
}

    public function tables()

    {
      if(!isset($_SESSION['user'])){
        header("location:login.php");
        exit();
      }else{
      error_reporting(E_ALL ^ E_WARNING);
      $model    = $this->model('Model');
      $postData = $_POST;
      if(isset($_POST['disp']))
      {
      $data = $model->teacher($postData);
     
      $this->view('pages/table', $data);
      }
    }
      
    
    
  //   else{
  //     header("location:login.php");
  //     exit();
  // }
}

    public function register()
    {
      error_reporting(E_ALL ^ E_WARNING); 
      if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);
        $email    = $_POST['email'];
        $password = stripslashes($_POST['password']);
        $array    = [ $username ,  $email , $password];
     
        $model = $this->model('Model');
        $model->register($array);
        $data =[
          "message" =>  "Registered successfully"
        ];
        $this->view('pages/index' , $data);
        }
    }
    public function logout()

    {
      session_destroy();
    //   session_start();
    //  unset($_SESSION['user']);
    //  unset($_SESSION['pass']);
    
     $data = 
     [
       'title' => 'logout'
     ];
     $this->view('pages/login', $data);
    }

    public function logincheck()
    {
      $data = [
        'title' => 'login'
      ];

      $this->view('pages/login', $data);

    }




    public function login()
    {  
      error_reporting(E_ALL ^ E_WARNING);
      if (isset($_POST['adminId'])) {  
        $adminId = $_POST['adminId'];
        $password = $_POST['password'];
        $array    = [$adminId , $password];
        $model    = $this->model('Model');
        $data     = $model->Enter($array);
        $name     = $data[0]->adminId;
        $pass     = $data[0]->password;
        if(  $adminId == $name && $password == $pass)
        {
          // session_start();
         $_SESSION['user'] = $name;
         $_SESSION['pass']=$pass;
         $this->view('pages/teacher');
        }
        else
        {
          $data=[
            'message' => 'login failed!'
          ];
          $this->view('pages/login', $data);
        }
    } 
    else 
    {
    $data = [
      'title' => 'login'
    ];
    $this->view('pages/login', $data);
    }
  }




    public function disp()

    {
      if(empty($_SESSION['user'])){
        header("location:login.php");
        exit();
      }
      error_reporting(E_ALL ^ E_WARNING);
      $model    = $this->model('Model');
      $postData = $_POST;
      $post     = $model->display1($postData);
      $data     = [
        'posts' => $post
      ];
   
    $this->view('pages/display',$data);
      
    }
  
 


    public function registration()
    {
      $data = [
        'title' => 'registration'
      ];

      $this->view('pages/registration', $data);

    }

     
    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }
