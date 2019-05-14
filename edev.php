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
    <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


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
        <li ><a href="index.php"><i class="fa fa-home"></i> <span>Module Home</span></a></li>

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

        <li class="active treeview">
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
       <small>Add Device / equipment  / machinery</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

             <?php
		date_default_timezone_set('Africa/Nairobi');
		@$date=(Date("d-m-Y") );
		@$times=(Date(" l jS-F-Y") );
		 ?>

                   <?php


@$date = (Date("d-m-Y") );
@$devicename = $_POST['devicename'];
@$make = $_POST['make'];
@$model = $_POST['model'];
@$sno = $_POST['sno'];
@$type = $_POST['type'];
@$location = $_POST['location'];
@$firstuse = $_POST['firstuse'];
@$ifreq = $_POST['ifreq'];
@$ssfreq = $_POST['ssfreq'];
@$l_insp = $_POST['l_insp'];
@$l_ser = $_POST['l_ser'];
@$cstatus = $_POST['cstatus'];
@$remarks = $_POST['remarks'];
@$dept = $_POST['dept'];
@$user=htmlentities($_SESSION['username']);
if(isset($_POST['Submit']))

{

//insert information into admission table
//personal details
$query = "INSERT into devices( name, make, model, sno,type, location, bought,insp_freq, service_freq, last_insp, last_service,status, remarks,dept,date,added_by)
VALUES('$devicename','$make', '$model','$sno','$type','$location','$firstuse','$ifreq','$ssfreq','$l_insp','$l_ser','$cstatus','$remarks','$dept','$date','$user')";


$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result)
{

	?>
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Device/Machinery added</h4>
</div>


<?php


}
else
{
?>
<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Device/Machinery not saved!, try again, check your network or seek help </h4>
                              </div>

 <?php
}
}
?>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
        <!-- left column -->
        <div class="col-md-9" style="margin-left:12%; margin-right:12%;" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <small>Details</small>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                        <form class="form-horizontal" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Device Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="devicename" id="devicename" placeholder="Machinery/Device Name" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Make</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="make" id="make" placeholder="Make">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Model</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="model" id="model" placeholder="Model">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3"  class="col-sm-3 control-label">SNO</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="sno" id="sno" placeholder="Serial Number, 0 if not available" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Category/Type</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="type" id="type" required="required">
                   <?php
                    echo'<option value=""> Select</option>';
                    //$todaydates=substr($todaydate, 0, 10);
                     $sql = "select id, type from devicetype ORDER BY type ASC ";
                    $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                   while($row = mysqli_fetch_assoc($result))
                     {

                  	echo"<option value=".$row['id'].">".$row['type']."</option>";
                 	//$_SESSION["location"]=$row[0];
                  	//$location=$_SESSION["location"];
                    }
                   ?>
                               </select>


                  </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Location</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="location" id="location" required="required">
                   <?php
                     echo'<option value=""> Select</option>';
                     //$todaydates=substr($todaydate, 0, 10);
                    $sql = "select id, location from devicelocation ORDER BY location ASC ";
                    $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                    while($row = mysqli_fetch_assoc($result))
                    {

                  	echo"<option value=".$row['id'].">".$row['location']."</option>";
	                }
                   ?>
                                   </select>
                  </div>
                </div>


           <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date of first Use</label>

                  <div class="col-sm-9">

                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="firstuse" id="datepicker" placeholder="If unsure approximate">
                </div>


                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Inspection Frequecy</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="ifreq" id="ifreq" required="required">
                   <?php
                     echo'<option value=""> Select</option>';
                     //$todaydates=substr($todaydate, 0, 10);
                    $sql = "select id, freq from sfreq ORDER BY id ASC ";
                    $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                    while($row = mysqli_fetch_assoc($result))
                    {

                  	echo"<option value=".$row['id'].">".$row['freq']."</option>";
	                }
                   ?>
                                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Service Frequecy</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="ssfreq" id="ssfreq" required="required">
                   <?php
                     echo'<option value=""> Select</option>';
                     //$todaydates=substr($todaydate, 0, 10);
                    $sql = "select id, freq from sfreq ORDER BY id ASC ";
                    $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
                    while($row = mysqli_fetch_assoc($result))
                    {

                  	echo"<option value=".$row['id'].">".$row['freq']."</option>";
	                }
                   ?>
                                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Last Inspection</label>

                  <div class="col-sm-9">

                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="l_inspe" id="datepicker" >
                </div>


                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Last Service</label>

                  <div class="col-sm-9">

                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="l_ser" id="datepicker" >
                </div>


                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Current Status</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="cstatus" id="cstatus" required="required">
                    <option value="">Select</option>
                   <option value="1">Good Condition</option>
                   <option value="2">Inspection Due</option>
                   <option value="3">Past Inspection Date</option>
                   <option value="4">Service Due</option>
                   <option value="5">Past Service Date</option>
                   <option value="6">Faulty</option>
                                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Department</label>

                  <div class="col-sm-9">

                    <select class="form-control select2" style="width: 100%;" name="dept" id="dept" required="required">
                    <option value="">Select</option>
                   <option value="1">Electrical</option>
                   <option value="2">IT</option>
                   <option value="3">Both</option>

                                   </select>
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Remarks</label>

                  <div class="col-sm-9">

                    <textarea class="form-control" rows="3" name="remarks" placeholder="Enter your remark(s) if any ........"></textarea>
                  </div>
                </div>






              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="Submit" name="Submit" id="Submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>


          </div>
          </div>
          </div>
          <!-- /.box -->




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
