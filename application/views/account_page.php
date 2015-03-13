<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content=content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<title>CommunityFund</title>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">CommunityFund</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="profile">Home</a></li>
	        <li><a href="">Projects</a></li>
	        <li><a href="">Start</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="Search">
        	</div>
        		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      	  </form>
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"><span class="glyphicon glyphicon-user"></span><?php echo ' '.$username ?><span class="caret"></span></a>
	          	<ul class="dropdown-menu" role="menu">
	          		<li><a href="profile">Profile</a></li>
	            	<li><a href="account">Account</a></li>
	            	<li class="divider"></li>
	            	<li><a href="start_project">Start a Project</a></li>
	            	<li class="divider"></li>
	            	<li><a href="profile/logout">Log out</a></li> 
	            </ul>
            </li>
          </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="page-header">
	  		<h1>Settings</h1>
		</div>
		<ul class="nav nav-tabs" role="tablist" id="settings">
		  <li role="presentation" class="active"><a href="#account">Account</a></li>
		  <li role="presentation"><a href="#edit_profile">Edit Profile</a></li>
		  <li role="presentation"><a href="#notifications">Notifications</a></li>
	   </ul>
	   <div class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="account">Account details</div>
		  <div role="tabpanel" class="tab-pane fade" id="edit_profile">Edit profile</div>
		  <div role="tabpanel" class="tab-pane fade" id="notifications">notifications</div>
		</div>
   </div>

   <script>
  $('#settings a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
</body>