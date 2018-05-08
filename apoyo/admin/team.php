<?php
include_once 'connect.php';
?>
<?php
session_start();
$userid=$_SESSION['$userid'];
$username=$_SESSION['$username'];

if(isset($userid)=="")
{
    header('location:login.php');
}
else
{
    if ((time() - $_SESSION['last_login_timestamp']) > 900)
    {
        header("location:logout.php");
        exit;
    }
    else 
    {
        $_SESSION['last_login_timestamp'] = time();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Team</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
     <link rel="stylesheet" href="bootstrap/prettyPhoto.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <style>
	.form-control-feedback {
	  position: absolute;
	  top: 0;
	  right: 0;
	  z-index: 2;
	  display: block;
	  width: 64px;
	  height: 34px;
	  line-height: 34px;
	  text-align: center;
	  pointer-events: none;
	}
      #example1 img{
    height: 50px;
    width: 50px;
}
  </style>
  <!--/CSS for registration form center -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo" style="background-color:rgba(0,124,195,1);">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" ><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" ><b>Apoyo Technologies</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
           
            
               <?php if (isset($userid)) { ?>
                <li><p class="navbar-text" style="color:white;">Signed in as <?php echo $username; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            
          </li>
            
        </ul>
      </div>
    </nav>
  </header>
  

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="margin-left:5px;" style="color:white;"><?php echo $username; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">MAIN MENU</li>
        <li >
          <a href="index.php">
           <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
		
		<li >
          <a href="candidate.php">
           <i class="fa fa-pencil"></i> <span>Resume Details</span>
          </a>
        </li>
		
         
            <li>
          <a href="comment.php">
           <i class="fa fa-user"></i> <span>contactbox</span>
          </a>
        </li>
            <li>
          <a href="gallery.php">
           <i class="fa fa-user"></i> <span>Brand</span>
          </a>
        </li>
            <li>
          <a href="team.php" class="active">
           <i class="fa fa-user"></i> <span>Team</span>
          </a>
        </li>
            <li>
          <a href="admin.php">
           <i class="fa fa-user"></i> <span>Admin</span>
          </a>
        </li>
          
          
           <li>
          <a href="testimonial.php">
           <i class="fa fa-user"></i> <span>Testimonial</span>
          </a>
        </li>
		  <li>
          <a href="jobs.php">
           <i class="fa fa-user"></i> <span>Jobs</span>
          </a>
        </li>
		
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active"><a href="#">Team</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
            <!-- Main content -->
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4">
            	<a href="add_team.php" class="btn btn-primary btn-block btn-flat">Add Team Member</a>
            </div>
                <div class="col-xs-4 col-sm-4 col-md-4"></div>
        </div>
  <br><br><br><br>
        
<!--/end container-->
<!--datatable of all subject-->
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<!--datatable design code -->
			<div class="box">
                 <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4">
            <div class="box-header">
              <h3 class="box-title" style="font-size:21px;">Team Member</h3>
            </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4"></div>
                </div>
           
            <!-- /.box-header -->
            <div class="box-body">
			<div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
                  <script>$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );</script>
                <thead>
                <tr>
                 <th>No</th>
                  <th>Name</th>
                 <th>Date Of Birth</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                   <th>Address</th>
                 <th>Date Of Joining</th>
                    <th>Designation</th>
                 <th>Qualification</th>
                 <th>Salary</th>
                 <th>Photo</th>
				  <th>Action</th>
                </tr>
                </thead>  
                <tbody>
                     <script type="text/javascript">
                        $(document).ready(function() 
                        {
                            $('#example').DataTable( {
                                "order": [[ 3, "desc" ]]
                            } );
                        } );
                    </script>
                
<?php
                    include_once 'connect.php';
                    $c=1;
        $query = mysqli_query($DBcon,"SELECT* FROM `team` ORDER BY id DESC")or die(mysqli_error($DBcon));
       $count = mysqli_num_rows($query);
                   
                       
                    
                    
        while($row = mysqli_fetch_array($query)){
        $id = $row['id'];
  ?>        
				<tr>
                    <td><?php echo $c++ ?></td>
                  <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['mobno'] ?></td>
                 <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['doj'] ?></td>
                 
                   
                  <td><?php echo $row['desi'] ?></td>
                  <td><?php echo $row['descr'] ?></td>
                    <td><?php echo $row['salary'] ?></td>
                 <td>  <a href="../images/team/<?php echo $row['image']  ?>" class="prettyphoto">
                       <center> <img src="images/team/<?php echo $row['image']  ?>" alt="" /></center></a>
                    
                    </td>
                   
					  <td>&nbsp;&nbsp;<a href="edit_team.php?id=<?php echo $id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
                         
                          
                           <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>    


                          
                          
					  <a href="delete_team.php?id=<?php echo $id; ?>" onClick="return ConfirmDelete();"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color:red;"></span></a>
					  </td>
                </tr>
<?php
 }
?>
                </tbody>
                
              </table>
            </div>
			<!--table responsive tag -->
			</div>
            <!-- /.box-body -->
          </div>
			<!--/datatable design code -->
		</div>
	</div>
<!--end datatable of all subjets-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.main content-wrapper -->
    <footer class="main-footer">
    <div class="row">
			<div class="col-md-4 col-xs-4">
				
			</div>
			<div class="col-md-4 col-xs-4">
				 <center><p >Crafted by <a href="#"><b>Apoyo Technologies</b></a> </p></center>
			</div>
			<div class="col-md-4 col-xs-4">
				
			</div>
	</div>
  </footer>

</div>
<!-- ./wrapper -->

  
  

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>