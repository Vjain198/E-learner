<!-- Start including header-->
<?php
  include_once('./dbconnection.php');
  include('./header.php');
?>
 <!-- End including header-->

 <div class="container-fluid bg-dark"><!-- Start Course page Banner-->
    <div class="row">
        <img src="./images/courseimg/coursesbannerimg.jpg" alt="courses" style="height:300px; width:100% ;object-fit:cover; box-shadow:10px;"/>
    </div>
</div> <!-- End Course page Banner-->

<div class="container jumbotron mb-5">
   <div class="row">
       <div class="col-md-4">
           <h5 class="mb-3">If Already Registered !! Login</h5>
           <form role="form" id="stuLoginForm">
               <div class="form-group">
                   <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
                   <small id="statusLogMsg1"></small><input type="email"  class="form-control" name="stuLogEmail" id="stuLogEmail" placeholder="Email">
               </div>
               <div class="form-group">
                   <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
                   <input type="password"  class="form-control" name="stuLogPass" id="stuLogPass" placeholder="Password">
               </div>
               <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            </form><br/>
            <small id="statusLogMsg"></small>
       </div>
       <div class="col-md-6 offset-md-1">
          <h5 class="mb-3">New User !! SignUp</h5>
          <form role="form" id="stuRegForm">
               <div class="form-group">
                   <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
                   <small id="statusMsg1"></small><input type="text"  class="form-control" name="stuname" id="stuname" placeholder="Name">
               </div>
               <div class="form-group">
                   <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                   <small id="statusMg2"></small><input type="email"  class="form-control" name="stuemail" id="stuemail" placeholder="Email">
                   <small>We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                   <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold"> New Password</label><small id="statusMg3"></small>
                   <input type="password"  class="form-control" name="stupass" id="stupass" placeholder="Password">
               </div>
               <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">SignUp</button>
         </form><br/>
         <small id="successMsg"></small>
        </div>
   </div>
</div>

<!-- Start including footer-->
<?php
  include('./footer.php');
?>
<!-- End including footer-->

