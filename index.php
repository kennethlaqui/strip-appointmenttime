<!-- © Bootstrap by Azmind. Customized by VLI -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strip Appointment Time</title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
<!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
	
	<script src="js/angular.js"></script>
    <script src="js/angular-animate.js"></script>
    <script src="js/ui-bootstrap-tpls-1.3.3.js"></script>
    <script src="js/example.js"></script>
	
	<script src="js/placeholder.js"></script>
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/timeselect.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/stylse.css">
	<link rel="stylesheet" href="css/form-elements.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/footer.css">
	
	<!-- timepicker css -->
	
    
	<!-- plug-ins -->
	<!-- js -->
	
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<!-- datepciker -->
	
		
<!-- <script src="js/jquery-1.12.4.js"></script>
	 <script src="js/jquery-ui.js"></script>
	 <link rel="stylesheet" href="css/jquery-ui.css"> -->
	 <script src="js/bootstrap-datepicker.js"></script>
	 <link rel="stylesheet" href="css/datepicker.css">

 
	<!-- timepicker -->
	<link type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/bootstrap-timepicker.min.css" />
      
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="js/getall.js"> </script>
	
  </head>
  <body>
<style type="text/css">


#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}gb l,humn
</style>
	<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Bootstrap Multi Step Registration Form Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		

		
		<div class="top-content">
        <div class="inner-bg">     
		<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text">
				<h1 class="strstrip">Strip</h1>
				<h1>Hey Strip Mates!</h1>
				<div class="description">
					<h1>
						Welcome to the Strip: Ministry of Waxing, the global authority in hair removal with 42 parlours in 9 cities worldwide.
						
					</h1>
				</div>
			</div>
        </div>
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3 form-box style="margin-top: 100px;> 
			
		<form role="form" action="register.php" method="post"class="registration-form" enctype="application/x-www-form-urlencoded">
				
		<fieldset>
				<div class="form-top">
					<div class="form-top-left">
						<h3>Strip Appointment Time</h3>
					</div>
					<div class="form-top-right">
						<i class="fa fa-user"></i>
					</div>
		        </div>
				
	    <div class="form-bottom">
				<h3 style="margin-bottom: 25px; text-align: center;"></h3>
			
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="telno" name="telno" placeholder="Tel. Number">
				</div>		
				<div class="form-group">
					<select id="getlocation" name="getlocation" class="form-control">
					<option value="showAll" selected="selected">Show all branches</option>
						<!-- To display all data from database going to this select form -->
						<?php
							require_once 'config.php';
							
								$stmt = $dbcon->prepare("SELECT * FROM c_locn_cde WHERE stor_nme='Strip'");
								$stmt->execute();
							while($row=$stmt->fetch(PDO::FETCH_ASSOC))
							{
								extract($row);
								?>
								<option value="<?php echo $locn_cde; ?>"><?php echo $locn_nme; ?></option>
								<?php
							}
						?>
					</select>
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" id="therapist" name="therapist" placeholder="Therapist">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="treatment" name="treatment" placeholder="Treatment">
				</div>
				<div class="form-group">
					<input type="text" id="apntdate" name="apntdate" class="form-control" placeholder="Appointment Date">
				</div>
			
				<script type="text/javascript">
					// When the document is ready
					$(document).ready(function () {
						var date = new Date();
						date.setDate(date.getDate()-1);
						
						$('#apntdate').datepicker({ 
							startDate: date
						});
					});
				</script>
				<div class="" id="display" >
						<!-- Records will be displayed here/from branches -->
				</div>
				<div class="form-group">
				<textarea class="form-control" type="textarea" id="msg" name="msg" placeholder="Message" maxlength="140" rows="7"></textarea>
					<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
				</div>
				<button type="submit" id="submit" name="register" value="register" class="btn btn-primary btn-next">Submit</button>
				</div>
		</fieldset>
		</form>
		</div>
		</div>
		</div>
		</div>
		</div>
	
	<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p><br></p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Privacy Policy</h3>
                    <ul class="list-inline">
                        <!-- some social networks -->
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Terms and Conditions</h3>
                    <p></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Author <?php echo date("Y"); ?> V2
                </div>
            </div>
        </div>
    </div>
</footer>

	
 

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/charleft.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/scripts.js"></script>
		
		
		
     
    
		
  </body>
</html>