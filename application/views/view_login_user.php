<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Login Pengurus</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery-ui.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
</head>
<body>
	<div class="col-md-4 col-md-offset-4 kotak-login">
		<div class="panel panel-success">
			<div class="panel-heading">
				Login Pengurus
			</div>
			<div class="panel-body">
			<?php echo form_open('login_user/auth') ?>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div>
				<br/>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
				</div>
				<br/>
				<input type="submit" name="submit" value="Log In" class="btn btn-sm btn-primary">
				<a href="<?php echo base_url() ?>"> 
				<input type="button" name="button" value="Kembali" class="btn btn-sm btn-primary">
				</a>
			   </form>
			</div>
		</div>
	</div>
</body>
</html>