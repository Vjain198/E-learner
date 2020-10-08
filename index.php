<?php
  include_once('./dbconnection.php');
  include('./header.php');
?>


 <!-- Start video background -->
   <div class="container-fluid remove-vid-marg">
     <div vid-parent>
       <video  playsinline autoplay muted loop>
         <source src="videos/bg-vid.mp4">
       </video>
       <div class="vid-overlay"></div>
     </div>
     <div class="vid-content">
       <h1 class="my-content">Welcome to E-learners</h1>
       <small class="my-content">Learn and Implement</small><br>
       <?php
          if(!isset($_SESSION['is_login'])){
             echo ' <a href="#" class=" btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModelCenter">Get Started</a>';
          }
          else{
              echo '<a href="Student/StudentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
          }
       
       ?>
      

     </div>
   </div>
 <!-- End video background -->


 <!--  Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i>100+OnlineCourses</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
        </div>
      </div>
    </div>



 <!-- End Text Banner -->

 <!-- Start Popular Courses-->
   <div class="container mt-5">
      <h1 class="text-center">Popular Course</h1>
      <!-- Start Most Popular Course  1st Card Deck -->
      <div class="card-deck mt-4">
          <?php
             $sql = "SELECT * FROM course LIMIT 3";
             $result = $conn->query($sql);
             if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  $course_id = $row['course_id'];
                  echo '          <a href="coursedetails.php?course_id='.$course_id .'" class="btn" style="text-align:left; padding:0px; margin:0px;">
                  <div class="card">
                    <img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                         <h5 class="card-title">'.$row['course_name'].'</h5>
                         <p class="card-text">'.$row['course_desc'].'</p>
                     </div>
                     <div class="card-footer">
                       <p class="card-text d-inline">Price: <small><del>&#8377;'.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377;'.$row['course_price'].'</span></p>
                       <a  class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id .'">Enroll</a>
                     </div>
                   </div>
                 </a>';
                }
              }
            ?>
       </div>
      <!-- End Most Popular Course  1st Card Deck -->
      <!-- Start Most Popular Course  2nd Card Deck -->
      
      <div class="card-deck mt-4">
            <?php
             $sql = "SELECT * FROM course LIMIT 3,3";
             $result = $conn->query($sql);
             if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  $course_id = $row['course_id'];
                  echo '          <a href="coursedetails.php?course_id='.$course_id .'" class="btn" style="text-align:left; padding:0px; margin:0px;">
                  <div class="card">
                    <img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                         <h5 class="card-title">'.$row['course_name'].'</h5>
                         <p class="card-text">'.$row['course_desc'].'</p>
                     </div>
                     <div class="card-footer">
                       <p class="card-text d-inline">Price: <small><del>&#8377;'.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377;'.$row['course_price'].'</span></p>
                       <a  class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id .'">Enroll</a>
                     </div>
                   </div>
                 </a>';
                }
              }
            ?>
             </div>
      
      <!-- End Most Popular Course  2nd Card Deck -->
      <div class="text-center m-2">
        <a href="courses.php" class="btn btn-danger btn-sm">View All Courses</a>
      </div>
   </div>

 <!-- End  Popular Courses-->

 <!-- Start ContactUs Page-->
      <?php
         include('./contactus.php');
      ?>

   <!-- End ContactUs Page-->


   <!-- Start  students Testimonials-->
      <div class="container-fluid mt-5" style="background-color:#4B7289" id="feedback">
           <div class='container mx-auto mt-5 pt-3  mb-3  pb-3 col-md-10 col-11'>
             <div class="header text-center text-white"><h4> Student's Feedback </h4></div>
                    <div class="row">
                           <?php
                             $sql = "SELECT s.stu_img ,f.f_content FROM student AS s  JOIN feedback AS f ON s.stu_id = f.stu_id";
                             $result = $conn->query($sql);
                             if($result->num_rows>0){
                               while($row = $result->fetch_assoc()){
                                 $s_img = str_replace('..','.',$row['stu_img']);
                            ?>                          
                       
                           <div class="card col-md-3 col-11 ml-3 ">
                               <div class="card-content">
                                   <div class="card-body p-0">
                                       <div class="profile mb-4 mt-3 "> <img src="<?php echo $s_img;?>"> </div>
                                       <div class="card-subtitle">
                                           <p> <small class="text-muted"> <i class="fas fa-quote-left"></i><?php echo $row['f_content'];?><i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                            <?php 
                               }
                              }
                            ?>
                       </div>
              </div>
       </div>
   <!-- End  students Testimonials-->

   <!-- Start Social Follow-->
     <div class="container-fluid bg-danger">
       <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i> Whatsapp</a>
          </div>
          <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
      </div>
   <!-- End Social Follow-->

   <!-- Start About Us Section-->
     <div class="container-fluid p-4" style="background-color:#E9ECEF">
        <div class="container" style="background-color:#E9ECEF">
           <div class="row text-center">
                  <div class="col-sm">
                       <h5>About Us</h5>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis facere, 
                           praesentium sit quos sunt modi culpa ipsa quaerat eius. Accusamus, 
                           esse quod?</p>
                  </div>
                  <div class="col-sm">
                     <h5>Category</h5>
                       <a  class="text-dark" href="#">Web Developemt</a><br/>
                       <a  class="text-dark" href="#">Web Desigining</a><br/>
                       <a  class="text-dark" href="#">Android App Developemt</a><br/>
                       <a  class="text-dark" href="#">IOS Developemt</a><br/>
                       <a  class="text-dark" href="#">Data Analysis</a><br/>
                   </div>
                   <div class="col-sm">
                      <h5>Contact Us</h5>
                      <p>E-learners Pvt Ltd <br> Near Police Camp II <br>Bokaro , Jharkhand<br> Ph. 0000067</p>
                   </div>
             </div>
        </div>
      </div>
   <!-- End About Us Section-->
   <!-- Start Footer-->
     <?php
      include('./footer.php');
     ?>
     <!-- End Footer-->