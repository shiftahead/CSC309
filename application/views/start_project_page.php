<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
	        <li><a href="profile">Home</a></li>
	        <li><a href="">Projects</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="Search">
        	</div>
        		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      	  </form>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"><span class="glyphicon glyphicon-user"></span><?php echo ' '.$username ?><span class="caret"></span></a>
	          	<ul class="dropdown-menu" role="menu">
	          		<li><a href="#">Profile</a></li>
	            	<li><a href="account">Account</a></li>
	            	<li class="divider"></li>
	            	<li><a href="#">Start a Project</a></li>
	            	<li class="divider"></li>
	            	<li><a href="profile/logout">Log out</a></li> 
	            </ul>
            </li>
          </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="jumbotron">
    	<h1 class="text-center">Start a new project</h1>

	    <form class="form-horizontal" role="form">
	        <div id="formstyle">
	            <label class="col-sm-3 col-sm-offset-3"><p>I want to start a new</p></label>	        
	          <div class="form-group">
	            <div class="col-sm-2">
	              	<select class="form-control" name="project_type">
	              		<option value="art">Art</option>
	              		<option value="comics">Comics</option>
	              		<option value="crafts">Crafts</option>
	              		<option value="dance">Dance</option>
	              		<option value="fashion">Fashion</option>
	              		<option value="filmnvideo">Film&Video</option>
	              		<option value="food">Food</option>
	              		<option value="games">Games</option>
	              		<option value="music">Music</option>
	              		<option value="photography">Photography</option>
	              		<option value="technology">Technology</option>
	              	</select>
	            </div>
	            <p> project</p>
	            <br></br>
	            <center>
	              <input class = "form-control input-lg "type="text" style = "width: 560px" placeholder = "title...">
	            </center>
	            <br>
	            
	            <label class = "col-sm-4 control-label"><h4>I'm based in </h4></label>
	            <div class="col-sm-4">
	              <div class="dropdown">
	                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><h5>Country
	                <span class="caret"></span></h5></button>
	                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Australia</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Canada</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Denmark</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ireland</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Netherlands</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NewZealand</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Norway</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sweden</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">United Kingdom</a></li>
	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">United States</a></li>
	                </ul>
	              </div>
	            </div>

	            <button type = "button" class="btn btn-primary"><h4>Start</h4></button>
	          </div>
	        </div>
	        
	    </form>
	    </div>
	</div>