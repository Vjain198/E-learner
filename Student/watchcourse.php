<?php
if(!isset($_SESSION)){
    session_start();

}
include('../dbconnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];

}
else{
    echo "<script> location.href='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Css-->

        <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Font awesome Css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" 
    crossorigin="anonymous" />

    
    
    <!-- Google Font-->

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">


     <!-- Custom Css-->

    <link rel="stylesheet" href="../css/stustyle.css">

    <title>Watch Course</title>
</head>
<body>
    <div class="container-fluid bg-success p-2">
        <h3>Welcome to E-learners</h3>
        <a  class="btn btn-danger" href="./myCourse.php">My Courses</a>

    </div>
     <div class="container-fluid">
         <div class="row">
            <div class="col-sm-3 border-right">
                <h4 class="text-center">Lessons</h4>
                <ul id="playlist" class="nav flex-column">
                    <?php
                      if(isset($_GET['course_id'])){
                        $course_id = $_GET['course_id'];
                        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result = $conn->query($sql);
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                                echo '<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style="cursor:pointer;">'.$row['lesson_name'].'</li>';
                            }
                        }
                      }
                    ?>

                </ul>

            </div>
            <div class="col-sm-8">
                <video id="videoarea" src="" class="mt-5 w-75 ml-2" controls></video>

            </div>
         </div>

     </div>

     <!---  Jquery and  Bootstrap Javascript ---->
            <script src="../js/jquery.min.js"></script>
            <script src="../js/poper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
     <!-- Font Awesome -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

    <!--  Admin Ajax Call  Javascript-->
        <script src="../js/adminajaxrequest.js"></script>

    <!--  Custom Javascript-->
      <script src="../js/custom.js"></script>

    
</body>
</html>