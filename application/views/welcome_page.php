
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<title>CommunityFund</title>
</head>



<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="">CommunityFund</a>
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
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?php echo site_url('signin/') ?>"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      	  </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
	<div class="jumbotron">
		<div class="text-center">
			<h2>CommunityFund: Improve Your Community</h2></div>
		<div class="text-center">
			<h3> Sign up to join this community!</h3> <br>
		</div>
	
	<div class="form-group">
		<div class="row">
			<div class="text-center col-lg-4 col-lg-offset-4">
				<?php echo validation_errors(); ?>
				<?php echo form_open(''); ?>
					<input class="form-control" name="email" type=text placeholder="Email" value="<?php echo set_value('email'); ?>"> <br> 
					<input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>"> <br>
					<input class="form-control" name="pwd" type="password" maxlength="16" placeholder="Password"> <br>
					<input class="form-control" name="pwdconf" type="password" maxlength="16" placeholder="Retype password"> <br>
					<p>You want to be a<br></p>
					<select class="form-control" name="identity">
  						<option value="funder">Funder</option>
  						<option value="initiator">Initiator</option>
					</select><br>
					<!-- <label class="radio text-left col-md-offset-4">
					<input name="identity" type="radio" value="funder" <?php echo set_radio('identity', 'funder'); ?>>Funder<br>
					<input name="identity" type="radio" value="initiator" <?php echo set_radio('identity', 'initiator'); ?>>Initiator<br>
					</label> -->
					<input class="btn btn-primary" type="submit" value="Sign up for free">
				</form>
			</div>
		</div>
	</div>
	<div class="text-center">
		<br><h4>Have an account? <a href="<?php echo site_url('/signin') ?>">Log in</a></h4>
	</div>
	</div>
	</div>
</body>


</html>