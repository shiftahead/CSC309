<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<title>CommunityFund</title>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo site_url('') ?>">CommunityFund</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo site_url('') ?>">Home</a></li>
	        <li><a href="">Projects</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="Search">
        	</div>
        		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      	  </form>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="text-center">
			<h1>Welcome back!</h1></div><br>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="text-center col-lg-2 col-lg-offset-5">
				<?php echo validation_errors(); ?>
				<?php echo form_open('signin'); ?>
					<input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>"> <br>
					<input class="form-control" name="pwd" type="password" maxlength="16" placeholder="Password"> <br>
					<input class="btn btn-primary" type="submit" value="Log in">
				</form>
				<br><p><a href="forget">Forget password?</a></p>
			</div>
		</div>
	</div>
	<div class="text-center">
		<br><h4>New to CommunityFund? <a href="<?php echo site_url('') ?>">Sign up now!</a></h4>
	</div>
</body>