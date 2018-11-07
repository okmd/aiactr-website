<!DOCTYPE html>
<html>
<head>
	<title>Ait | Student's Dashboard</title>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo base_url('images/logo/aiactr.png');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style type="text/css">
	/* The side navigation menu */
		.bav{
			background: #101010;
		}
		.sidenav {
		    height: 100%;  
		    width:225px;  
		    position: fixed;  
		    z-index: 1;  
		    top:51px;
		    left: 0;
		    background-color:#222;  
		    overflow-x: hidden;  
		     
		    transition: 0.5s;
		}
		.sidenav ul{
			padding: 0px;
		}
		.sidenav ul li{
			position: relative;
			display: block;
			list-style: none;
			 
		}
		 #academics-drop a{
		 	padding-left: 55px;
		 }
		/* The navigation menu links */
		.sidenav a {
			position: relative;
		    padding:15px;
		    text-decoration: none;
		    color: #818181;
		    display: block;
		    transition: 0.3s;
		    line-height: 20px;
		}

		/* When you mouse over the navigation links, change their color */
		.sidenav a:hover, .offcanvas a:focus, .nav a:hover{
		    color: #f1f1f1;
		    background: black;
		}
		/* Position and style the close button (top right corner) */
	
		/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
		#main {
			margin-top:50px;
		    transition: margin-left .5s;
		    margin-left: 225px;
		    padding: 5px;
		    background: turquoise;
		}
		#OC{
			position:absolute;
			top:50%;
			transition:left .5s;
			font-size:43px;
			color:#3c763d;
		}
	</style>
	<script>
		function NavToggle(){
			var sideNav=document.getElementById("mySidenav");
			if(sideNav.style.width=="0px" || sideNav.style.width==""){
				sideNav.style.width = "225px";
			    document.getElementById("main").style.marginLeft = "225px";
			    document.getElementById("OC").style.left = "225px";
			    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			    document.getElementById("n-in-out").classList.remove("fa-hand-o-rght");
			    document.getElementById("n-in-out").classList.add("fa-hand-o-left");
			    
			}
			else{
				sideNav.style.width = "0px";
				document.getElementById("main").style.marginLeft = "0px";
			    document.getElementById("OC").style.left = "0px";
			    document.body.style.backgroundColor = "white";
			    document.getElementById("n-in-out").classList.remove("fa-hand-o-left");
			    document.getElementById("n-in-out").classList.add("fa-hand-o-right");
			    
			}
		}
	</script>
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#"><span class="fa fa-dashboard"></span> Dashboard</a>

	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav navbar-right">
	      <li class="active"><a href="<?php echo base_url();?>index.php/"><span class="fa fa-home"></span> </a></li>
	      <li><a href="#"><span class="fa fa-comment"></span> </a></li>
	      <li><a href="#"><span class="fa fa-envelope"></span> </a></li>
	      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell"></span><span class="badge" style="position:absolute;left:15px;top:8px">1</span></a>
	      	
	      	<ul class="dropdown-menu">
	      	<li><a href="#"><span class="label label-default">Default Label</span> 1</a></li>
	      	<li><a href="#"><span class="label label-primary">Default Label</span> 2</a></li>
	      	<li><a href="#"><span class="label label-success">Default Label</span> 3</a></li>
	      	<li><a href="#"><span class="label label-warning">Default Label</span> 4</a></li>
	      </ul>

	      </li> 
	      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> Md Danish <span class="caret"></span></a>
	      <ul class="dropdown-menu">
	      	<li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
	      	<li><a href="#"><span class="fa fa-envelope"></span> Inbox</a></li>
	      	<li><a href="#"><span class="fa fa-wrench"></span> Settings</a></li>
	      	<li class="divider"></li>
	      	<li><a href="<?php echo base_url('entry/student/logout');?>"><span class="fa fa-sign-out"></span> Logout</a></li>
	      </ul>
	      </li> 
	    </ul>
	  </div>
	  </div>
	</nav>

	<div id="OC" onclick="NavToggle();"><span class="fa fa-hand-o-right" id="n-in-out"></span> </div>
	
	<div id="mySidenav" class="sidenav">
		<ul>
	      <li><a href="#"><span class="fa fa-table"></span>&nbsp; Time table</a></li>
	      <li><a data-toggle="collapse" data-target="#academics-drop" href="#">
	      <span class="fa fa-graduation-cap"></span>&nbsp; Academics <span class="caret"></span></a>
	        <ul class="collapse" id="academics-drop">
	          <li><a href="#">Syllabus</a></li>
	          <li><a href="#">Your Faculty</a></li>
	          <li><a href="#">Assignments</a></li> 
	          <li><a href="#">Aattendence</a></li> 
	          <li><a href="#">Admit card</a></li> 
	          <li><a href="#">Result</a></li> 
	        </ul>
	      </li>
	      <li><a href="#"><span class="fa fa-credit-card"></span>&nbsp; Payment</a></li> 
	      <li><a href="#"><span class="fa fa-suitcase"></span>&nbsp; Jobs</a></li> 
	      <li><a href="#"><span class="fa fa-book"></span>&nbsp; Library</a></li> 
	      <li><a href="#"><span class="fa fa-sticky-note"></span>&nbsp; e-notes</a></li> 
	      <li><a href="#"><span class="fa fa-folder"></span>&nbsp; Projects</a></li> 
	      <li><a href="#"><span class="fa fa-heartbeat"></span>&nbsp; Activities</a></li> 
	      <li><a href="#"><span class="fa fa-calendar"></span>&nbsp; Calendar</a></li> 
	    </ul>
    </div>
	
	<div id="main">
	 	<!--<div class="row">
	 		<div class="col-md-12">
	 			<div class="table-responsive">
	 				<table class="table table-bordered table-hover">
	 					<tr>
	 						<th colspan="10"><h3 class="text-center"> Your Schedule</h3></th>
	 					</tr>
	 					<tr>
	 						<th rowspan="2" class="text-center">Day</th>
	 						<th colspan="9" class="text-center">Time (AM), Lunch 01:00-01:30</th>
	 					</tr>
	 					<tr>
	 						<th class="text-center">9:00-10:00</th>
	 						<th class="text-center">10:00-11:00</th>
	 						<th class="text-center">11:00-12:00</th>
	 						<th class="text-center">12:00-01:00</th>
	 						<th class="text-center">01:30-02:30</th>
	 						<th class="text-center">02:30-03:30</th>
	 						<th class="text-center">03:30-04:30</th>
	 						<th class="text-center">04:30-05:30</th>
	 					</tr>
	 					<tr>
	 						<td class="text-center">Monday</td>
	 						<td class="text-center" colspan="2">DS-G6</td>
	 						<td class="text-center">DS</td>
	 						<td class="text-center">STLD</td>
	 						<td class="text-center" colspan="2">AE LAB G-4 | STLD LAB G-5 | EIM LAB G-6</td>
	 						<td class="text-center">AM-III</td>
	 						<td class="text-center">AM-III</td>
	 					</tr>
	 					<tr>
	 						<td class="text-center">Tuesday</td>
	 						<td class="text-center" colspan="2">EIM LAB G-4 | DS LAB G-5 | SS LAB G-6</td>
	 						<td class="text-center">EIM</td>
	 						<td class="text-center">DS</td>
	 						<td class="text-center">SS</td>
	 						<td class="text-center">AE</td>
	 						<td class="text-center">STLD</td>
	 						<td class="text-center"></td>
	 					</tr>
	 					<tr>
	 						<td class="text-center">Wednesday</td>
	 						<td class="text-center">STLD</td>
	 						<td class="text-center">AE</td>
	 						<td class="text-center" colspan="2">AE LAB G-4 | STLD LAB G-5 | -</td>
	 						<td class="text-center">STLD</td>
	 						<td class="text-center">SS</td>
	 						<td class="text-center">AM-III</td>
	 						<td class="text-center">AM-III</td>
	 					</tr>
	 					<tr>
	 						<td class="text-center">Thursday</td>
	 						<td class="text-center" colspan="2">SS LAB G-4 | AE LAB G-5 | STLD LAB G-6</td>
	 						<td class="text-center">AE</td>
	 						<td class="text-center">SS</td>
	 						<td class="text-center">EIM</td>
	 						<td class="text-center">EIM</td>
	 						<td class="text-center"></td>
	 						<td class="text-center"></td>
	 					</tr>
	 					<tr>
	 						<td class="text-center">Friday</td>
	 						<td class="text-center">SS</td>
	 						<td class="text-center">EIM</td>
	 						<td class="text-center">DS</td>
	 						<td class="text-center">AE</td>
	 						<td class="text-center" colspan="2">AE LAB G-4 | STLD LAB G-5 | EIM LAB G-6</td>
	 						<td class="text-center">DS</td>
	 						<td class="text-center"></td>
	 					</tr>

	 				</table>
	 			</div>
	 		</div>
	 	</div>-->
	 	<div class="row">
	 		<div class="col-md-2"><img  class="img-responsive" src="../images/1.jpg"></div>
	 		<div class="col-md-10">
	 			<div class="row">
	 				<div class="col-md-12">hello</div>
	 			</div>
	 		</div>
	 	</div>
	</div>

</body>
</html>