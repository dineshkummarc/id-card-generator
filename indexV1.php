<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ID Generator in PHP</title>
		<link href="img/favicon.ico" rel="icon" type="image">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datepicker.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/datepicker.js"></script>
		<script src="js/navbarclock.js"></script>
    </head>
		<body>
			<div class="topmost container">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>
								<strong class="panelinputtitle">Personal Information</strong>
							</center>
						</div>
						<div class="panel-body" style="min-height:220px;">
							<div class="container-fluid">
								<form method = "post" enctype="multipart/form-data" id="uploadForm">
									<div class = "form-group">
										<input type = "text" class = "form-control" placeholder="Your Name" name="visitornewm" value="<?php echo @$_POST['visitornewm']; ?>">
									</div>
									<div class = "form-group">
										<input type="text" readonly name="dateinput" class="datepicker-here form-control" placeholder="Your Birthday" data-language="en" value="<?php echo @$_POST['dateinput'];;?>">
									</div>
									<div class = "form-group">
										<input type = "submit" class = "btn btn-primary btn-block" name="process" value="Generate ID">
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>
								<strong class="panelinputtitle">Generated ID Card</strong>
							</center>
						</div>
						<div class="panel-body" style="min-height:230px;">
							<center>
								<?php
								if($_SERVER['REQUEST_METHOD'] == 'POST'){
									echo '<img src="'.$img2.'">';
								}else{
									echo "<img src='img/id.png' alt='' class='resultimg'/>";
								}
								?>
								
								<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo @$text; ?>.png ">Download ID Card</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</body>	
</html>