<?php
 include_once('../dbconnection.php');
 if(!isset($_SESSION)){
     session_start();
 }
 if(isset($_SESSION['is_login'])){
     $stuLogEmail = $_SESSION['stuLogEmail'];
 }



 if(isset($stuLogEmail)){
     $sql ="SELECT stu_img FROM  student WHERE stu_email = '$stuLogEmail'";
     $result = $conn->query($sql);
     $row =  $result->fetch_assoc();
     $stu_img = $row['stu_img'];
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>


    <!-- Bootstrap Css-->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Font awesome Css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" 
    crossorigin="anonymous" />

    
    
    <!-- Google Font-->

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">


</head>
<body>
     <!-- To Navbar-->

     <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#225470;">
        <a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-learners</a>
     </nav>

     <!-- Side Bar-->

     <div class="container-fluid">
        <div class="row">
           <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item mb-3">
                   <img src="<?php echo $stu_img?>" alt="studentimage" class="img-thumbnail rounded-circle">
                  </li>
                  <li class="nav-item">
                     <a  class="nav-link" href="studentProfile.php">
                        <i class="fas fa-user"></i>
                        Profile <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="myCourse.php">
                     <i class="fab fa-accessible-icon"></i>
                     My Courses
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="stufeedback.php">
                     <i class="fab fa-accessible-icon"></i>
                      Feedback
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="studentChangePassword.php">
                     <i class="fas fa-key"></i>
                      Change Password
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../logout.php">
                     <i class="fas fa-sign-out-alt"></i>
                      Logout
                     </a>
                  </li>
               </ul>
              </div>
           </nav>