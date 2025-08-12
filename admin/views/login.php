<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('views/style.css'); ?>">
</head>

<body class="hold-transition login-page sidebar-mini">

<div class="login-box">
	<div class="login-logo">
		<b>Admin Panel</b>
	</div>
  	<div class="login-box-body">
    	<p class="login-box-msg">Connecter-vous</p>
    
	    <?php 
	    //if( (isset($error_message)) && ($error_message!='') ):
	        //echo '<div class="error">'.$error_message.'</div>';
	    //endif;
	    ?>

		<form action="" method="post">

			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus>
			</div>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
			</div>
			<div class="row">
				<div class="col-xs-8"></div>
				<div class="col-xs-4">
					<input type="submit" class="btn btn-success btn-block btn-flat login-button" name="form1" value="Log In">
				</div>
			</div>
		</form>
	</div>
</div>

<script src="<?php echo adminUrl('js/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo adminUrl('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo adminUrl('js/app.min.js'); ?>"></script>
</body>
</html>