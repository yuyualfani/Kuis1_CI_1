<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
	</div>
	
	<h1 class="text-center">My World</h1>
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
					<a class="navbar-brand" href="<?php echo site_url()?>/home">My Blog</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
						<li ><a href="<?php echo site_url()?>/test">About Me</a></li>
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
		
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		
		<div class="table-responsive">
		<h1>Biodata Query Biasa dari Array</h1>
			
		</div>

		


	<table class="table table-striped table-hover">
		
		<tbody>
			<?php foreach ($biodata_array as $key) {
			?>
			<tr>
				<td><?php echo $key["nim"]; ?></td>
				<td><?php echo $key["nama"]; ?></td>
				<td><?php echo $key["alamat"]; ?></td>
			</tr>
			
			<?php  
			} ?>
		</tbody>
	</table>
</div>











		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
		<h1>Biodata Query Biasa Object</h1>
			<table class="table table-hover">
				
				<tbody>
				<table class="table table-striped table-hover">
		
		<tbody>
			<?php foreach ($biodata_object as $key) {
			?>
			<tr>
				<td><?php echo $key->nim; ?></td>
				<td><?php echo $key->nama; ?></td>
				<td><?php echo $key->alamat; ?></td>
			</tr>
			
			<?php  
			} ?>
		</tbody>
	</table>

				</tbody>
			</table>
		</div>
		</div>




		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
		<h1>Biodata Builder dari Array</h1>
			<table class="table table-hover">
				
				<tbody>
				<?php foreach ($biodatabuilder_array as $key) {
			?>
			<tr>
				<td><?php echo $key["nim"]; ?></td>
				<td><?php echo $key["nama"]; ?></td>
				<td><?php echo $key["alamat"]; ?></td>
			</tr>
			
			<?php  
			} ?>
				</tbody>
			</table>
		</div>
		</div>



<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
		<h1>Biodata Builder dari Object</h1>
			<table class="table table-hover">
			<tbody>
				<?php foreach ($biodata_object as $key) {
			?>
			<tr>
				<td><?php echo $key->nim; ?></td>
				<td><?php echo $key->nama; ?></td>
				<td><?php echo $key->alamat; ?></td>
			</tr>
			
			<?php  
			} ?></tbody>
							</table>
		</div>
		</div>



		<h1 class="text-center">My Fav Qoutes</h1>
		
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
			“You gain strength, courage, and confidence by every experience in which you really stop to look fear in the face. You must do the thing which you think you cannot do.”
Eleanor Roosevelt
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			“It is impossible to live without failing at something, unless you live so cautiously that you might as well not have lived at all, in which case you have failed by default.”
J.K. Rowling
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		“When one door closes, another opens; but we often look so long and so regretfully upon the closed door that we do not see the one which has opened for us.
		Alexander Graham Bell”
		</div>


	</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" "></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>