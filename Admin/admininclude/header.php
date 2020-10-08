<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <!-- Bootstrap Css-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    
        <!-- Font awesome Css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" 
        crossorigin="anonymous" />
    
        
        
        <!-- Google Font-->
    
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
        <!-- Custom Css-->
        <link rel="stylesheet" href="../css/adminstyle.css">
    
    </head>
    <body>
   
             <!-- Top Navbar--->
               <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470">
                 <a href="Dashborad.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-learners <small class="text-white">Admin Area</small></a>
               </nav>

             <!-- Slide bar -->
                     <div class="container-fluid mb-5" style="margin-top:40px;">
                            <div class="row">
                                 <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                                     <div class="sidebar-sticky">
                                        <ul class="nav flex-column">
                                           <li class="nav-item">
                                             <a  class="nav-link" href="Dashboard.php">
                                                <i class="fas fa-tachometer-alt"></i>
                                                Dashboard
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="courses.php">
                                               <i class="fab fa-accessible-icon"></i>
                                                Courses
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="lessons.php">
                                             <i class="fab fa-accessible-icon"></i>
                                                Lessons
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="students.php">
                                                <i class="fas fa-users"></i>
                                                Students
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="sellReport.php">
                                                <i class="fas fa-table"></i>
                                                 Sell Report
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="adminPaymentStatus.php">
                                                <i class="fas fa-table"></i>
                                                Payment Status
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="feedback.php">
                                             <i class="fab fa-accessible-icon"></i>
                                                Feedback
                                             </a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="AdminChangePass.php">
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
