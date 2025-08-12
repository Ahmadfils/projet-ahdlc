<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo url('public/images/logo.png'); ?>" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/datepicker3.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/all.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/select2.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/dataTables.bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/jquery.fancybox.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/_all-skins.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/on-off-switch.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo adminUrl('assets/css/summernote.css'); ?>">
	<link rel="stylesheet" href="<?php echo adminUrl('views/style.css'); ?>">

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="<?php echo adminUrl('dashboard')?>" class="logo">
				<span class="logo-lg">AHDLC - CMS</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>
    <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php //echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php //echo $_SESSION['user']['full_name']; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="<?php echo adminUrl('profile-edit')?>" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="<?php echo adminUrl('logout')?>" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php //$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>
<!-- Side Bar to Manage Shop Activities -->
  		<aside class="main-sidebar">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview">
			          <a href="<?php echo adminUrl('dashboard'); ?>">
			            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
			          </a>
			        </li>

					
			        <li class="treeview">
			          <a href="<?php echo adminUrl('category'); ?>">
			            <i class="fa fa-tasks"></i> <span>Categories</span>
			          </a>
			        </li>

			        <li class="treeview">
			          <a href="<?php echo adminUrl('articles'); ?>">
			            <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Articles</span>
			          </a>
			        </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            <span>Domaines d'intervention</span>
                            <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo adminUrl('action');?>"><i class="fa fa-circle-o"></i> Action  humanitaire</a></li>
                            <li><a href="<?php echo adminUrl('adaptation'); ?>"><i class="fa fa-circle-o"></i> Adaptation climatique</a></li>
                            <li><a href="<?php echo adminUrl('employabilite'); ?>"><i class="fa fa-circle-o"></i> Employabilite</a></li>
                            <li><a href="<?php echo adminUrl('developpement'); ?>"><i class="fa fa-circle-o"></i> Developpement communautaire</a></li>
                            <li><a href="<?php echo adminUrl('domaine'); ?>"><i class="fa fa-circle-o"></i> Domaines transversaux</a></li>
                            <li><a href="<?php echo adminUrl('integration'); ?>"><i class="fa fa-circle-o"></i> Integration</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="<?php echo adminUrl('users'); ?>">
                            <i class="fa fa-user-o"></i> <span>Utilisateurs</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo adminUrl('visiteurs'); ?>">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Visiteurs</span>
                        </a>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <span>Services</span>
                            <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo adminUrl('service1'); ?>"><i class="fa fa-circle-o"></i> Service 1</a></li>
                            <li><a href="<?php echo adminUrl('service2'); ?>"><i class="fa fa-circle-o"></i> Service 2 </a></li>
                        </ul>
                    </li>

			        <li class="treeview">
			          <a href="<?php echo adminUrl('pageSettings'); ?>">
			            <i class="fa fa-window-restore" aria-hidden="true"></i> <span>Parametres de Page</span>
			          </a>
			        </li>

			      	<li class="treeview">
			          <a href="<?php echo adminUrl('faq'); ?>">
			            <i class="fa fa-question-circle"></i> <span>FAQ</span>
			          </a>
			        </li>

			        <li class="treeview">
			          <a href="<?php echo adminUrl('social-media'); ?>">
			            <i class="fa fa-globe"></i> <span>Social Media</span>
			          </a>
			        </li>

			        <li class="treeview">
			          <a href="<?php echo adminUrl('settings'); ?>">
			             <i class="fa fa-cogs"></i> <span>Parametres</span>
			          </a>
			        </li>

      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">