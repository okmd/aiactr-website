
<header>
	<nav class="navbar navbar-default" id="TopNavbarHover">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TopNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="TopNavbar">
			    <ul class="nav navbar-nav navbar-left">
			        <li><?php echo anchor('', 'Home', ''); ?></li>
			        <li><?php echo anchor('scholarships', 'Scholarships', ''); ?></li>
			        <li><?php echo anchor('', 'Payments', ''); ?></li>
			        <li><?php echo anchor('govt', 'Govt.', ''); ?></li>
			        <li><?php echo anchor('contactUs', 'Contact Us', ''); ?></li>
			        <li><?php echo anchor('entry/student', 'Online Portal', ''); ?></li>
			        <li><?php echo anchor('clife/alumini/', 'Alumini', ''); ?></li>
			        <li><?php echo anchor('faqs', 'FAQs', ''); ?></li>
				   </ul>
				<ul class="nav navbar-nav navbar-right">
				  	<li><a href="<?php echo base_url('entry/admin'); ?>">
				  	<span class="fa fa-user"></span>  &nbsp;Admin</a></li>
			     	<!--<li><a href="<?php //echo base_url('students/signup'); ?>"><span class="fa fa-user-plus"></span>  &nbsp;SignUp</a></li>-->
			    </ul>
		    </div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-2 col-lg-2">
				<img src="<?php echo base_url('images/logo/aiactr.png');?>" id="logoImg" class="center-block" width="200"/>
			</div>
			<div class="col-sm-12 col-md-10 col-lg-10 text-center">
			<h3>Ambedkar Institute of Advanced Communication Technologies and Research</h3>
			<h5>Formy known as Ambedkar Institute of Technology.</h5>
			<h5>Govt. of NCT of Delhi</h5>
			<h5>Geeta Colony Delhi-110031</h5>
			</div>
		</div>
	</div>
		
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#BottomNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			</div>
			<div class="collapse navbar-collapse" id="BottomNavbar">
				<ul class="nav navbar-nav">
				    <li><a href="#" data-toggle="dropdown">About</a>
				        <div class="container-large dropdown-menu">
					      	<div id="about">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/15.png');?>" width="200" height="150" class="img-responsive center-block">
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p style="margin-top: 15px;">
										AIACTR is functioning from its Campus located at Geeta Colony, East Delhi. The Institute has an area of 8.5 acres at Geeta Colony in which a State-of-Art Campus with ultra-modern facilites and lush green ambiance all around is built.
									</p>
								</div>

								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Campus</h4></li>
										<li><a href="<?php echo base_url('contactus');?>">Location map</a></li>
										<li><a href="<?php echo base_url('about/library');?>">Library</a></li>
										<li><a href="<?php echo base_url('about/sports');?>">Sports</a></li>
										<li><a href="<?php echo base_url('about/canteen');?>">Canteen</a></li>
											
									</ul>
								</div>
								
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Organization</h4></li>
										<li><a href="<?php echo base_url('about/infrastructure');?>">Infrastructure</a></li>
										<li><a href="<?php echo base_url('about/departments');?>">Departments</a></li>
										<li><a href="<?php echo base_url('about/mandatoryDisclosers');?>">Mandatory disclosers</a></li>
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#"  data-toggle="dropdown">Administration</a>
				      	<div class="container-large dropdown-menu">
					      	<div id="administration">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/administration.png');?>"  width="200"  height="150" class="img-responsive center-block">
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p>
										AIACTR is functioning from its Campus located at Geeta Colony, East Delhi. The Institute has an area of 8.5 acres at Geeta Colony in which a State-of-Art Campus with ultra-modern facilites and lush green ambiance all around is built.
									</p>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Officers</h4></li>
										<li><a href="<?php echo base_url('administration/principal_desk');?>">Pricicpal Desk</a></li>
										<li><a href="<?php echo base_url('administration/faculty/hod');?>">HODs</a></li>
										<!--<li><a href="<?php //echo base_url('administration/principal_desk');?>">Publication</a></li>-->
										<li><a href="<?php echo base_url('Placements');?>">Tranning and placements</a></li>
									</ul>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Faculty</h4></li>
										<li><a href="<?php echo base_url('administration/faculty/ece');?>">ECE Faculty</a></li>
										<li><a href="<?php echo base_url('administration/faculty/ece');?>">CSE Faculty</a></li>
										<li><a href="<?php echo base_url('administration/faculty/ohter');?>">Other</a></li>
										<li><a href="<?php echo base_url('about/infrastructure#labs');?>">Labs</a></li>		
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">Admission</a>
				     	<div class="container-large dropdown-menu">
					      	<div id="admission">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/admission.jpg');?>" width="200" height="150" class="img-responsive center-block">
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p>
										Annual Budget for the last 10 years
											Annual Account for the last 10 years
											Annual Audit for the last 10 years
											Part 1
											Part 1
									</p>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('admission/course/ug');?>">Undergraduate</a></li>
										<li><a href="<?php echo base_url('admission/course/pg');?>">Postgraduate</a></li>
										<li><a href="<?php echo base_url('admission/course/doc');?>">Doctorate</a></li>
										
									</ul>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Other</h4></li>
										<li><a href="<?php echo base_url('academics/feeStructure');?>">Fee Strucute</a></li>
										<li><a href="<?php echo base_url('#');?>">IPU Rank</a></li>
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">Academics</a>
				     	<div class="container-large dropdown-menu">
					      	<div id="academics">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/admission.jpg');?>" width="200" height="150" class="img-responsive center-block">
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p>
										Annual Budget for the last 10 years
											Annual Account for the last 10 years
											Annual Audit for the last 10 years
											Part 1
											Part 1
									</p>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('about/departments');?>">Departments</a></li>
										<li><a href="<?php echo base_url('academics/syllabus');?>">Syllabus</a></li>
										<li><a href="<?php echo base_url('academics/feeStructure');?>">Fee Structure</a></li>
										<li><a href="<?php echo base_url('administration/faculty/all');?>">Faculty Profile</a></li>		
									</ul>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('academics/callender');?>">Academic Calender-view</a></li>
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">Notices</a>
				      	<div class="container-large dropdown-menu">
					      	<div id="notice">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/notice.jpg');?>" width="200" height="150" class="img-responsive center-block">
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p>
										Notices nnntpo nnnp nrninfdkf nfjnfdj 
									</p>
								</div>

								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('notice/news/latest');?>">Letest News</a></li>
										<li><a href="<?php echo base_url('notice/news/events');?>">Events</a></li>
										<li><a href="<?php echo base_url('notice/news/jobs');?>">Jobs/Oppurtunities</a></li>
										<li><a href="<?php echo base_url('notice/news/seminars');?>">Seminars/Workshops</a></li>
												
									</ul>
								</div>
								
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('notice/circulars');?>">Circulars/Orders</a></li>
										<li><a href="<?php echo base_url('notice/tenders');?>">Tenders</a></li>
										<li><a href="<?php echo base_url('#');?>">Deiirently Disabled Srudents</a></li>
										<li><a href="<?php echo base_url('#');?>">Manual</a></li>
										<li><a href="<?php echo base_url('#');?>">Cetizen's Character</a></li>
												
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">Examination</a>
					    <div class="container-large dropdown-menu">
					      	<div id="exam">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/exam.jpg');?>" width="200" height="150" class="img-responsive center-block">
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p>
										hg djs  sjgsj jgsd gdgdgddg  gddg gd gdgdgdg dg ddg dgsgdsg gd gdshdg gdshdg sdg 
									</p>
								</div>

								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="<?php echo base_url('examination');?>">Examination Deparmrnt</a></li>
										<li><a href="<?php echo base_url('examination/datesheet');?>">Datesheet</a></li>
										<li><a href="<?php echo base_url('notice/news/examination');?>">Examination Notices</a></li>
										<li><a href="<?php echo base_url('examination/results');?>">Results</a></li>
										<li><a href="<?php echo base_url('#');?>">Regulation Forms</a></li>
										<li><a href="<?php echo base_url('academics/syllabus');?>">Syllabus</a></li>
												
									</ul>
								</div>
								
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Courses</h4></li>
										<li><a href="#">Notes</a></li>
										<li><a href="#">Books</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">Solutions</a></li>	
										<li><a href="#">Lab Manual</a></li>	
									</ul>
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">T&P Office</a>
				      	<div class="container-large dropdown-menu">
					      	<div id="tpo">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/photo.png');?>" width="200" height="150" class="img-responsive center-block">
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<ul>
										<li><h4 class="text-left">Officer</h4></li>
										<li>Name: Md Dansh</li>
										<li>Email: <a href="tpo@aiactr.ac.in" style="display:inline;">tpo@aiactr.ac.in</a> | <a href="mailto:itplacement@gmail.com" style="display:inline;">itplacement@gmail.com</a></li>
										<li>Mobile: +91-9298928982</li>
										<li>Telephone: +011-22000000 | +011-00228822</li>
									</ul>
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<ul>
										<li><h4 class="text-left">Facilities</h4></li>
										<li><a href="<?php echo base_url('placements/previousplacements');?>">Previous Placements</a></li>
										<li><a href="<?php echo base_url('placements/companies');?>">Hiring Companies</a></li>
										<li><a href="<?php echo base_url('placements/');?>">Facilities</a></li>
												
									</ul>
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2 text-left">
									<img src="<?php echo base_url('images/photo.png');?>" width="200" height="150" class="img-responsive center-block">
								</div>
							</div>
						</div>
				    </li>
				    <li><a href="#" data-toggle="dropdown">Campus Life</a>
					    <div class="container-large dropdown-menu">
					      	<div id="campus-life">
					      		<div class="col-sm-2 col-md-2 col-lg-2">
									<img src="<?php echo base_url('images/campus-life.png');?>" width="200" height ="150" class="img-responsive center-block">
								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<p >
										hg djs  sjgsj jgsd gdgdgddg  gddg gd gdgdgdg dg ddg dgsgdsg gd gdshdg gdshdg sdg 
									</p>
								</div>

								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Activities</h4></li>
										<!--<li><a href="<?php// echo base_url('about/location');?>">Sports</a></li>
										<li><a href="<?php// echo base_url('about/location');?>">Library</a></li>
										<li><a href="<?php// echo base_url('about/location');?>">Canteen</a></li>
										<li><a href="<?php// echo base_url('antiAit');?>">Anti Ragging/Grievance</a></li>
										-->	
										<li><a href="<?php echo base_url('clife/events/workshops');?>">Workshops</a></li>	
										<li><a href="<?php echo base_url('clife/festivals');?>">Techmical Festivals</a></li>	
										<li><a href="<?php echo base_url('clife/sprojects');?>">Student's Projects</a></li>	
									</ul>
								</div>
								
								<div class="col-sm-3 col-md-3 col-lg-3 text-left">
									<ul>
										<li><h4 class="text-left">Facilities</h4></li>
										<li><a href="<?php echo base_url('about/socities');?>">Socities</a></li>
										<li><a href="<?php echo base_url('clife/events/seminars');?>">Seminars</a></li>
										<li><a href="<?php echo base_url('clife/saffairs');?>">Student's Affairs</a></li>
										<li><a href="<?php echo base_url('clife/gallery');?>">Gallery</a></li>
									</ul>
								</div>
							</div>
						</div>
				    </li>
				</ul>
			</div>
		</div>
	</nav>
</header>