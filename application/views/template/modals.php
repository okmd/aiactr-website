<!-- Student modal-->
<div id="student-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Login</h4>
      </div>
      <div class="modal-body">
      
        <form class="form-horizontal">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
			    
			    
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">Login</button>
			    </div>
			  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    

  </div>
</div>

<!-- faculty modal-->
<div id="faculty-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Faculty Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
			    
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- admin modal-->
<div id="admin-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Administrator Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
			    
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Grievance form -->
<div id="grienvance-form" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fill Grievance Form</h4>
      </div>
      <div class="modal-body">
      	<!-- form -->
        <form >
		  <div class="form-group">
		    <label  for="g-reg-no">University reg. no:*</label>
		    <input type="text" class="form-control" id="g-reg-no" placeholder="Enter University registration no">
		  </div>
		  <div class="form-group">
		    <label  for="g-name">Full Name:*</label>
		    <input type="text" class="form-control" id="g-name" placeholder="Enter name (as per records)">
		  </div>

		  <div class="form-group">
		    <label  for="g-email">Email:*</label>
		    <input type="email" class="form-control" id="g-email" placeholder="Enter your email">
		  </div>

		  <div class="form-group">
		    <label  for="g-c-no">Contact No:*</label>
		    <input type="text" class="form-control" id="g-c-no" placeholder="Enter contact number">
		  </div>

		  <div class="form-group">
		    <label  for="g-course">Course:*</label>
		    <select id="g-course" class="form-control" >
		      	<option value="btech">B.Tech(Computer Science & Engineering)</option>
		      	<option value="btech">B.Tech(Electronics and Communication Engineering)</option>
		      	<option value="btech">M.Tech(Information Security)</option>
		      	<option value="btech">M.Tech(Digital Communication)</option>
		      	<option value="btech">M.Tech(RF & Microwave)</option>
		      	<option value="btech">M.Tech(Signal Processing)</option>
		      </select>
		  </div>

		  <div class="form-group">
		    <label  for="g-g-against">Grievance against:*</label>
		    <select id=="g-g-against" class="form-control" >
		      	<option value="btech">Department of Computer Science</option>
		      	<option value="btech">Department of Electronics & Communication</option>
		      	<option value="btech">Department of Applied Science</option>
		      	<option value="btech">Department of Mechanical and Electrical</option>
		      	<option value="btech">Examination Cell</option>
		      	<option value="btech">Academic Cell</option>
		      	<option value="btech">Trannig and Placement Cell</option>
		      	<option value="btech">Ragging</option>
		      	<option value="btech">Grievance</option>
		      	<option value="btech">Others</option>
		      </select>
		    </div>

		  <div class="form-group">
		    <label  for="g-yofadmission">Year of admission:*</label>
		    <input type="month" class="form-control" id="g-yofadmission" placeholder="Enter year of admission">
		  </div>

		  <div class="form-group">
		    <label  for="g-mailling-add">Mailling address:*</label>
		    <textarea id="g-mailling-add" class="form-control" placeholder="Enter mailling address"></textarea>
		  </div>

		  <div class="form-group">
		    <label  for="g-pincode">Pincode:*</label>
		    <input type="number" class="form-control" id="g-pincode" placeholder="Enter pincode">
		  </div>

		  <div class="form-group">
		    <label  for="g-g-details">Grievance Details:*</label>
		    <textarea id="g-g-details"  class="form-control" placeholder="Describe your problem here"></textarea>
		  </div>

		  <div class="form-group"> 
		    <button type="submit" class="btn btn-default">Submit</button>
		   </div>

		</form>
		<!-- form ends-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>