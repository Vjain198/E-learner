<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/testimonial.css">
  <link rel="stylesheet" href="css/style.css">
  <title>E-learners</title> 
</head>
<body>
 <!-- Start Navigation -->

   <nav class="navbar navbar-expand-sm navbar-dark bg-danger  pl-5 fixed-top">
      <a class="navbar-brand" href="index.php">E-learners</a>
      <span class="navbar-text">Learn and Implement</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav custom-nav pl-5 ">
         <li class="nav-item"><a href="index.php" class="nav-link custom-nav-item">Home</a></li>
         <li class="nav-item"><a href="paymentstatus.php" class="nav-link custom-nav-item">Payment Status</a></li>
         <li class="nav-item"><a href="courses.php" class="nav-link custom-nav-item">Courses</a></li>
         <?php
           session_start();
           if(isset($_SESSION['is_login'])){
               echo '<li class="nav-item"><a href="Student/StudentProfile.php" class="nav-link custom-nav-item">My Profile</a></li>
                     <li class="nav-item"><a href="logout.php" class="nav-link custom-nav-item">Logout</a></li>';
           }
           else{
               echo ' <li class="nav-item"><a href="#" class="nav-link custom-nav-item"data-toggle="modal" data-target="#stuloginModelCenter">Login</a></li>
                     <li class="nav-item"><a href="#" class="nav-link custom-nav-item" data-toggle="modal" data-target="#stuRegModelCenter">Signup</a></li>';
           }
         
         ?>
         <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Feedback</a></li>
         <li class="nav-item"><a href="#" class="nav-link custom-nav-item">ContactUs</a></li>
        </ul>
      </div>
   </nav>


 <!-- End Navigation -->



