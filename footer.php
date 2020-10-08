   <!-- Start Footer-->
   <footer class="container-fluid bg-dark text-center p-2">
       <small class="text-white">Copyright &copy; 2020 || Designed By E-learining || <a href="#login" data-toggle="modal" data-target="#AdminloginModelCenter">Admin Login</a></small>
     </footer>
   <!-- End Footer-->

   <!-- Start Student Registration Form Modal-->


            <!-- Modal -->
            <div class="modal fade" id="stuRegModelCenter" tabindex="-1" aria-labelledby="stuRegModelCenterLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="stuRegModelCenterLabel">Student Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Start Student Registration Form--->
                     <?php
                       include('./studentregistrationform.php');
                     ?>
                   <!-- End Student Registration Form---> 
                  </div>
                  
                  <div class="modal-footer">
                    <span id="successMsg"></span>
                    <button type="button" class="btn btn-primary"
                    onclick="addStu()" id="signup">SignUp</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>




   <!-- End Student Registration Form Modal-->

      <!-- Start Student Login Form Modal-->


            <!-- Modal -->
            <div class="modal fade" id="stuloginModelCenter" tabindex="-1" aria-labelledby="stuloginModelCenterLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="stuloginModelCenterLabel">Student Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Start Student Login Form--->
                  <form id="stuLoginForm">
                      <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control"  placeholder="E-mail" name="stuLogemail" id="stuLogemail">
                      </div>

                      <div class="form-group">
                        <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
                        <input type="password" class="form-control" placeholder="New Password" name="stuLogpass" id="stuLogpass">
                      </div>
                      
                   </form>
                  <!-- End Student Login Form---> 
                  </div>
                  
                  <div class="modal-footer">
                     <small id="statusLogmsg"></small>
                    <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    
                  </div>
                </div>
              </div>
            </div>




          <!-- End Student login Form Modal-->

          <!-- Start Admin Login Form Modal-->
          
                             <!-- Modal -->
            <div class="modal fade" id="AdminloginModelCenter" tabindex="-1" aria-labelledby="AdminloginModelCenterLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="AdminloginModelCenterLabel">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Start Admin Login Form--->
                  <form id="AdminLoginForm">
                      <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control"  placeholder="E-mail" name="adminLogemail" id="adminLogemail">
                      </div>

                      <div class="form-group">
                        <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
                        <input type="password" class="form-control" placeholder="New Password" name="adminLogpass" id="adminLogpass">
                      </div>
                      
                   </form>
                  <!-- End Admin Login Form---> 
                  </div>
                  
                  <div class="modal-footer">
                  <small id="statusAdminLogmsg"></small>
                    <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- End Admin Login Form Modal-->










   <!-- End Admin Login Form Modal-->



   


  <script src="js/jquery.min.js"></script>
  <script src="js/poper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
  <script src="js/ajaxrequest.js"></script>
  <script src="js/adminajaxrequest.js"></script>
</body>
</html>

