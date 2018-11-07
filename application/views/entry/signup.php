
<div class="container-fluid">
<div class="row">
	<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-4 col-lg-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-center"><?php echo $panel_heading?></h3>
			</div>
			<div class="panel-body">
				<?php if(isset($mes)){?>
				<div class="alert <?php echo $cls;?> fade in">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				 		<?php echo$mes; ?>
				 </div>
				 <?php }?>
				<?php echo form_open("$link/signup");?>

				    <div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
					    	<input type="text" class="form-control" name="name" placeholder="Full Name" title="Enter Full Name" value="<?php echo set_value('name'); ?>">
					    </div>
					    <span class="text-danger"><?php echo form_error('name'); ?></span>
					</div>

					<div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="fa fa-at" style="font-size: 20px;"></span></div>
					    	<input type="text" class="form-control" name="email" placeholder="Email Address"  title="Enter Email" value="<?php echo set_value('email'); ?>">
					    </div>
					    <span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>

					<div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					    	<input type="password" class="form-control" name="pwd" placeholder="Password"  title="Enter Password">
					    </div>
					    <span class="text-danger"><?php echo form_error('pwd'); ?></span>
					</div>

					<div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="glyphicon glyphicon-refresh"></span></div>
					    	<input type="password" class="form-control" name="rpwd" placeholder="Retype-Password"  title="Confirm Password">
					    </div>
					    <span class="text-danger"><?php echo form_error('rpwd'); ?></span>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-lg btn-success center-block" style="width:50%;">SignUp</button>
						<h5 class="text-center" style="line-height: 20px;">
							By Signing up you confirm that you accept our
							<a href="#"> Terms of Service</a> and <a href="#"> Privacy Policy.</a>
						</h5>
					</div>
				</form>
			</div>
			<div class="panel-footer">
				<h5 class="text-center">Already have account? <a href='<?php echo base_url("$link/login");?>'>LogIn</a></h5>
			</div>
		</div>
	</div>
</div>
</div>