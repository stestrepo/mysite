<?php 
    session_start();
    $cc=$_SESSION['ccode'];
    $name=$_SESSION['name'];     
	$app_page="https://".$_SERVER['HTTP_HOST']."/AppAdmin/";	
?>
<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">							
		<li>
			<a href="<?php echo $app_page; ?>index.php">
			<i class="fa fa-dashboard"></i>
			<span class="title">Dashboard</span>
			<span class="selected"></span>
			</a>
		</li>
		<li >
			<a href="<?php echo $app_page; ?>my_profile.php">
			<i class="fa fa-user"></i>
			<span class="title">My Profile </span>
			<span ></span>
			</a>
		</li>
		

        <?php
        include('../ppl.php');
		include('../includes/department_access.php');

        
        ?>

		<?php
        if(  $dept_arr[ $_SESSION['ou'] ][0]==1   )
		{
        ?>
        <li>
			<a href="visitorslist.php">
			<i class="fa fa-user "></i>
			<span class="title"> Visitors List </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>


		
		<?php
        if( $cc == 'KRA181'|| ( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  ) || ( $role=="Faculty" && $dept_arr[ $_SESSION['ou'] ][0]==1 ) )
		{
        ?>
        <li>
			<a href="visitor.php">
			<i class="fa fa-user "></i>
			<span class="title"> Visitor Approval Request </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>


		<?php
        if( ( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  )  )
		{
        ?>
        <li>
			<a href="visitorsdetails.php">
			<i class="fa fa-user "></i>
			<span class="title"> Enter Visitor Details </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>

		<?php
        if( ( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  ) )
		{
        ?>
        <li>
			<a href="seminardetails.php">
			<i class="fa fa-user "></i>
			<span class="title"> Enter Seminar Details </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>


		<?php
        if( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  )
		{
        ?>
        <li>
			<a href="accodo_details.php">
			<i class="fa fa-user "></i>
			<span class="title"> Enter Visitor Accomodation Details </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>

		<?php
        if( $cc == 'KRA181'|| ( $_SESSION['deptadmin'] == 'TRUE' && $dept_arr[ $_SESSION['ou'] ][0]==1  ) || ( $role=="Faculty" && $dept_arr[ $_SESSION['ou'] ][0]==1 ) )
		{
        ?>
        <li>
			<a href="../Leave/pendingapprovals.php">
			<i class="fa fa-check-square-o "></i>
			<span class="title"> Pending Approvals </span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
		}
		?>
		
	</ul>
	<!-- END SIDEBAR MENU -->
</div>