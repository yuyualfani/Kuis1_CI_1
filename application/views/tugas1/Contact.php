<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" ">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		
	</div>
	<h1 class="text-center">Contact Page</h1>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">My Blog</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
						<li ><a href="<?php echo site_url()?>/about">About Me</a></li>
						<li ><a href="<?php echo site_url()?>/contact">Contact</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		
		<div class="container">
      <form class="form-horizontal" method="post">

        <div class="form-group">
          <label for="1" class="col-sm-offset-2 col-sm-2"> Full Name</label>
          <div class="col-sm-5">
            <input type="text" name="fname"" class="form-control" placeholder="ex:Yusniar Alfani">
          </div>
        </div>
         <div class="form-group">
          <label for="1" class="col-sm-offset-2 col-sm-2"> Nick Name</label>
          <div class="col-sm-5">
            <input type="text" name="nname"" class="form-control" placeholder="ex:Yuyu">
          </div>
          </div>
           
           <div class="form-group">
          <label for="1" class="col-sm-offset-2 col-sm-2"> Address</label>
          <div class="col-sm-5">
            <input type="text" name="address"" class="form-control" placeholder="ex:Jalan Kumbang">
          </div>
        </div>
        <div class="form-group">
          <label for="1" class="col-sm-offset-2 col-sm-2"> Age</label>
          <div class="col-sm-4">
            <input type="text" name="age"" class="form-control" placeholder="ex:20 years old">
          </div>
          </div>
        </div>

      
        <div class="form-group">
          <div class="col-sm-offset-6 col-sm-1">
            <input style="" class="btn-success" type="submit" name="submit" value="Submit">
          </div>

        </div>


      </form>
      <br><br>

	</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" "></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>