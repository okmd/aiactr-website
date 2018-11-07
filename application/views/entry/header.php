
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Online Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li><a href="<?php echo base_url('entry/student');?>">Students</a></li>
		<li><a href="<?php echo base_url('entry/staff');?>">Staffs</a></li>
	</ul>
    </div>
  </div>
</nav>
