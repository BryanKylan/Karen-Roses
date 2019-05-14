<?php
include '../includes/conn.php';
include '../includes/functions.php';
sec_session_start(); // Our custom secure way of starting a php session.
if(login_check($mysqli) == true) { ?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Karen Roses Portal</title>
  <link rel="Shortcut Icon" href="../images/karen.JPG" type="image/jpg"/>

    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-green sidebar-mini layout-boxed">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Assets  </b>  Manager</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           
          <!-- /.messages-menu -->

         
        
          <!-- User Account Menu -->
          <li class=" user user-menu">
            <!-- Menu Toggle Button -->
            
            
              <a href="#" >

                         
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span >
              <?php 
        if (login_check($mysqli) == true) {
                       // echo '<p>Currently logged  as ' . htmlentities($_SESSION['username']) . '.</p>';                  
 
 
	 
            echo @'  '. htmlentities($_SESSION['username']) . '   ';  }
            else {
   header("Location: ../index.php?error=1");
      }

            ?> 

              </span>
           </a>
            </li>
             <li class=" user user-menu"> 
             <a href="../user/index.php"  >
                         
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span >Profile</span>
            </a>
            </li>
            <li class=" user user-menu">
             <a href="logout.php"  >
                         
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span >Sign out</span>
            </a>


            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Module Home</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-tasks"></i> <span>Tasks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="idevice.php">Inspect Device</a></li>
            <li><a href="jobcard.php">Raise Job Card/Reminder</a></li>
            <li><a href="repair.php">Carry out Maintenance / Repair</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-microchip"></i> <span>Devices</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adddev.php">Add Device</a></li>
            <li><a href="edev.php">Edit Device</a></li>
            <li><a href="wodev.php">Delete/Write-off Device</a></li>
          </ul>
        </li>
        
          <li><a href="reports.php"><i class="fa fa-book"></i> <span>Reports</span></a></li>
          
          <li class="treeview">
          <a href="#"><i class="fa fa-wrench"></i> <span>Settings</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="alocations.php">Add Locations</a></li>
            <li><a href="amain.php">Add Maintenance Schedule</a></li>
            <li><a href="adtype.php">Add Item/Machine Type</a></li>
          </ul>
        </li>

        


      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <small>Assets/equipments register and maintenance module</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        
        <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua-active">
            <div class="inner">
              <h4>Total Devices</h4>
              <?php
 
            $sql = "select count(id) as tott_reg from devices where id!='' and  name!='' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_reg) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_reg "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-printer"></i>
            </div>
            <a href="alldevices.php" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green-active">
            <div class="inner">
              <h4>In Good Condition</h4>
              <?php
 
            $sql = "select count(id) as tott_regg from devices where id!='' and  name!='' and status='1' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_regg) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_regg "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-thumbsup"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h4>Inspection Due</h4>
              <?php
 
            $sql = "select count(id) as tott_regid from devices where id!='' and  name!='' and status='2' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_regid) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_regid "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
       
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
              <h4>Past Inspection Date</h4>
              <?php
 
            $sql = "select count(id) as tott_regpid from devices where id!='' and  name!='' and status='3' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_regpid) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_regpid "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-android-alert"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
       </div>
       
       
       <!-- Small boxes (Stat box) -->
      <div class="row">
      
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h4>Service Due</h4>
              <?php
 
            $sql = "select count(id) as tott_reggsd from devices where id!='' and  name!='' and status='4' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_reggsd) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_reggsd "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-android-settings"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange-active">
            <div class="inner">
              <h4>Past Service Date</h4>
              <?php
 
            $sql = "select count(id) as tott_regid from devices where id!='' and  name!='' and status='2' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_regid) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_regid "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-alert"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
                
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red-active">
            <div class="inner">
              <h4>Faulty</h4>
              <?php
 
            $sql = "select count(id) as tott_regid from devices where id!='' and  name!='' and status='2' ";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
 	
            list($tott_regid) = mysqli_fetch_row($result); 
 
            ?>


              <p><?php echo " $tott_regid "; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        
       </div>

      </section>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
  </footer>

  <!-- Control Sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
     
   
     
     
</body>
</html>


<?php } else {
   header("Location: ../index.php");
}

;?>
