<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo url('public/images/logo.png'); ?>" type="image/x-icon">
	<title>Connexion - AHDLC</title>
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
    	<p class="login-box-msg">Connecter-vous pour débuter votre session</p>
    
	    <?php 
	    if( (isset($data['message'])) && ($data['message'] !='') ):
	        echo '<div class="error">'.$data['message'].'</div>';
	    endif;
	    ?>

		<form action="" method="post">

			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus required>
			</div>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" required>
			</div>
			<div class="row">
				<div class="col-xs-8"></div>
				<div class="col-xs-4">
				  <input type="submit" class="btn btn-success btn-block btn-flat login-button" name="login">
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>