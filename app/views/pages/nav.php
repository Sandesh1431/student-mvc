
     <?php require APPROOT . '/views/inc/header.php'; ?>
    <form class = "form-inline my-2 my-lg-0" action              = "<?php echo URLROOT. 'pages/logout' ?>" method                           = "post">
    <nav  class = "navbar ">
    <div >
    <ul   class = "navbar-nav ">
    <img  src   = "<?php echo URLROOT .  'image/123.png' ?>" alt = "" style                                                                 = "width: 80px;">
    <li   class = "nav-item " style                              = "display: flex; margin-left:1em;" >
    <i    class = "fas fa-graduation-cap" style                  = "margin-top:0.5em;"></i>
    <a    class = "nav-link" href                                = "<?php echo URLROOT. 'pages/teacher' ?>">Trainer Registration <span class = "sr-only">(current)</span></a>
      </li>
       <li class = "nav-item"  style       = "display: flex;  margin-left:1em;">
       <i  class = " fas fa-user-tie"style = "margin-top:0.5em;"> </i>
       <a  class = "nav-link " href        = "<?php echo URLROOT. 'pages/student_details' ?>">Student Registration</a>
      </li>
     <li class = "nav-item"  style = "display: flex;  margin-left:1em;">
     
      <i class = " fas fa-hand-point-right" style = "margin-top:0.5em;"></i>
      <a class = "nav-link " href                 = "<?php echo URLROOT. 'pages/table' ?>">DATA</a>
      </li>
   
      <li     class = "nav-item"  style = "display: flex;  margin-left:1em;"> <i class = "fa fa-user" aria-hidden = "true"></i>
      <button class = "btn" type        = "submit" name   = "logout">Logout</button></li>
      </ul>
    </form>
  </div>
</nav>
