<?php
session_start();	
include("includes/config.php");		
$cc=$_SESSION['ccode'];
$name=$_SESSION['name'];

if($_SESSION['ccode']  )
{
	$photo1="http://www.tifr.res.in/webimages/photos/".$cc."_1.jpg";
?>
<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="../index.php">
				<!--<img src="../assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/>-->
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions hide">
			
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">					
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo $photo1; ?>"/>
						<span class="username username-hide-on-mobile">
						<?php echo $name; ?> </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="../my_profile.php">
								<i class="icon-user"></i> My Profile </a>
							</li>														
							<li class="divider">
							</li>							
							<li>
								<a href="../change_password.php">
								<i class="icon-key"></i> Change Passowrd </a>
							</li>
							<li>
								<a href="../logout.php">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
<?php		
}
else
{		
	echo "<script>window.location.href='../login.php' </script>";
}
?>		