<!-- Start including header-->
<?php
  include_once('./dbconnection.php'); 
  include('./header.php');
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0");
  

  // following files need to be included
  require_once("./PaytmKit/lib/config_paytm.php");
  require_once("./PaytmKit/lib/encdec_paytm.php");

  $ORDER_ID = "";
  $requestParamList = array();
  $responseParamList = array();

  if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

      // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
      $ORDER_ID = $_POST["ORDER_ID"];

      // Create an array having all required parameters for status query.
      $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
      
      $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
      
      $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

      // Call the PG's getTxnStatusNew() function for verifying the transaction status.
      $responseParamList = getTxnStatusNew($requestParamList);
  }



?>
 <!-- End including header-->


 <!-- Start Course Page Banner-->
   <div class="container-fluid bg-dark">
       <div class="row">
           <img src="images/courseimg/coursesbannerimg.jpg" alt="courses"
            style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
        </div>
    </div>
<!-- End Course Page Banner-->

<!-- Start main Content-->
   <div class="container">
       <h2 class="text-center my-4 ">Payment Status</h2>
       <form action="" method="post">
           <div class="form-group row">
               <label class="offset-sm-3 col-form-label">Order ID:</label>
               <div>
                   <input type="text"  class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"  value="<?php echo $ORDER_ID?>">
               </div>
               <div>
                   <input type="submit"  class="btn btn-primary mx-4" value="View">
                </div>
           </div>
       </form>
   </div>

<!-- End Main Content-->
<div class="container">
        <?php
         if (isset($responseParamList) && count($responseParamList)>0 )
        	{ 
        ?>

    <div class="justify-content-center">
        <div class="col-auto">
            <h2 class="text-center">Payment Receipt</h2>
            <table class="table table-bordered">
	            <tbody>
	            <?php
                	foreach($responseParamList as $paramName => $paramValue) {
                        if(($paramName == "TXNID") || ($paramName == "ORDERID") || ($paramName == "TXNAMOUNT")
                         || ($paramName == "STATUS")){?>
	            <tr >
	              <td><label><?php echo $paramName?></label></td>
	              <td><?php echo $paramValue?></td>
	            </tr>
	            <?php
	            	}}
                ?>
                <tr>
                    <td></td>
                    <td><button type="button" class="btn btn-primary" onclick="javascript:window.print();">Print Receipt</button></td>
                </tr>
	            </tbody>
            </table>
         </div>
    </div>
</div>
<?php
	}
?>




<!--- Start including Contact page---->
   <?php include('./contactus.php');?>
<!--- End including Contact page---->

<!-- Start including footer-->
<?php
  include('./footer.php');
?>
<!-- End including footer-->

