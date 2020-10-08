<?php
include_once('./dbconnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])){
    echo "<script> location.href = 'loginorsignup.php'</script>";
}
else{
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $stuEmail = $_SESSION['stuLogEmail'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>CheckOut Page</title>
</head>
<body>

   <div class="container mt-5">
       <div class="row">
           <div class="col-sm-6 offset-sm-3 jumbotron">
              <h3 class="mb-5">Welcome to E-learners payment page</h3>
              <form method="post" action="./PaytmKit/pgRedirect.php">
                  <div class="form-group row">
                      <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                      <div class="col-sm-8">
                          <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                            value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                      </div>
                 </div>
                 <div class="form-group row">
                      <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                      <div class="col-sm-8">
                          <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"
                            value="<?php if(isset($stuEmail)){echo $stuEmail;}?>" readonly>
                      </div>
                 </div>
                 <div class="form-group row">
                    <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-8">
                        <input type="text" title="TXN_AMOUNT" class="form-control" tabindex="10" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id'];}?>" readonly>

                    </div>
                 </div>
                 <div class="form-group row">
                      <div class="col-sm-8">
                          <input type="hidden" name="INDUSTRY_TYPE_ID" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" value="Retail" autocomplete="off" readonly>
                      </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-8">
                         <input type="hidden" name="CHANNEL_ID" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12" size="12" autocomplete="off" value="WEB" readonly>
                     </div>
                 </div>
                 <div class="text-center">
                     <input  type="submit" value="Checkout" class="btn btn-primary" onclick="">
                     <a href="./courses.php" class="btn btn-primary">Cancel</a>
                 </div>
             </form>
             <small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
          </div>
      </div>
   </div>











</body>
</html>
<?php
}
?>