<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('Admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="image1/1.jpg" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
	<!--		<li class="active"><a href="index.php">Home</a></li>	
			<li><a href="index1.php">Donor Registration</a></li>            
			<li><a href="requests.php">send Request</a></li>
            <li><a href="viewrequest.php">View Request</a></li>
            <li><a href="camps.php">Camps</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="contact.php">Contact Us</a></li>
           	<li><a href="aboutus.php">About</a></li>
            </ul>!-->
            <?php require('header.php');?>
	</div>
  
   
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr> 
          
            <?php
$cn=makeconnection();
//$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";

$s = "SELECT blooddonated.name,blooddonated.gender,bloodgroup.bg_name,blooddonated.unit,camp.camp_title,blooddonated.date,blooddonated.contact FROM blooddonated JOIN bloodgroup JOIN camp WHERE blooddonated.groups=bloodgroup.bg_id AND camp.camp_id=blooddonated.camp AND ,blooddonated.adhaar ='". $_REQUEST["bg"]."'";

	$result=mysqli_query($cn,$s);
	//$r=mysqli_num_rows($result);
	//echo $r;
  $data=mysqli_fetch_array($result);
	//$n=0;
	//while($data=mysqli_fetch_array($result))
  if(isset($data))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">


                <tr><td width="100px"  align="center" style="vertical-align:middle">

 <!--<a href="doner_pic<?php echo $data[8] ?>"data-lightbox="image-1"> <img src="doner_pic/<?php echo $data[8] ?>" height="100px" width="100px" style="margin:auto; padding-left:70px; padding-right:50px; float:left" /></a></td>-->


                    <td width="500px" height="50px" style="vertical-align:top">
                        

                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[0]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[1]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Blood Group</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td><span class="title">Unit</span></td><td><?php echo $data[3]; ?></td></tr>
                   <tr><td><span class="title">Camp Name</span></td><td><?php echo $data[4]; ?></td></tr>

                   <tr><td><span class="title">Donation Date</span></td><td><?php echo $data[5]; ?></td></tr>

                   <tr><td><span class="title">Contact</span></td><td><?php echo $data[6]; ?></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>

                    </td></tr></table></td></tr>
               
   <?php }
   ?>
           </table></td></tr></table></form>


		
</form>
</div>

     <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
  <div class="f_nav">
    <!-- <ul>
      <li class="active"><a href="index.php">Home</a></li>      
      <li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
      
            </ul> -->
  </div>
    <div class="copy">
      <p class="title">Group II -SKFGI- 2k17 Batch CSE </p>
    </div>
  <div class="clear"></div>
</div>
</div>
</div>
    
  
</div>
		




</body>
</html>