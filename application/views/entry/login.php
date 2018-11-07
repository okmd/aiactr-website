
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-4 col-lg-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="text-center"><?php echo $panel_heading?></h3>
				</div>
			<div class="panel-body">
				<?php echo form_open("$link/login");?>
				<?php if(isset($er)){?>
				<div class="alert <?php echo $cls;?> fade in">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				 		<?php echo$er; ?>
				 </div>
				 <?php }?>
				    <div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="fa fa-at" style="font-size: 20px;"></span></div>
					    	<input type="email" class="form-control" placeholder="Email Address" title="Enter Email" name="email" value="<?php echo set_value('email'); ?>">
					    </div>
					    <span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>

					<div class="form-group">
					    <div class="input-group">
					    	<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					    	<input type="password" class="form-control" placeholder="Password" title="Enter Password" name="pwd">
					    </div>
					    <span class="text-danger"><?php echo form_error('pwd'); ?></span>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-lg btn-success center-block" style="width:50%;">Login</button>
					</div>
				</form>
			</div>
			<div class="panel-footer">
				<h5 class="text-center"><a href="#">Forgot your password?</a></h5>
				<h5 class="text-center">Don't have account? <a href='<?php echo base_url("$link/signup");?>'>SignUp</a></h5>
			</div>
			</div>
		</div>
	</div>
</div>


			
