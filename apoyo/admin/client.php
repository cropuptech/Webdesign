<!--code for Add New Sunject-->
<?php
session_start();
$username=$_SESSION['$username'];
if(isset($_SESSION['$username'])=="")
{
    header('location:admin_login.php');
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
  <title>Admin | Client</title>
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
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
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
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/templatemo_logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
                <p>
                  Admin
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left"style="margin-left:100px;">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="margin-left:5px;">Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li >
          <a href="index.php">
           <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
		
		<li >
          <a href="candidate.php">
           <i class="fa fa-pencil"></i> <span>Candidate</span>
          </a>
        </li>
				
		<li>
          <a href="training.php">
           <i class="fa fa-database"></i> <span>Training</span>
          </a>
        </li>
          <li>
          <a href="fees.php">
           <i class="fa fa-user"></i> <span>Fees</span>
          </a>
        </li>
            <li>
          <a href="comment.php">
           <i class="fa fa-user"></i> <span>Comment</span>
          </a>
        </li>
            <li  >
          <a href="gallery.php">
           <i class="fa fa-user"></i> <span>Gallery</span>
          </a>
        </li>
            <li>
          <a href="team.php">
           <i class="fa fa-user"></i> <span>Team</span>
          </a>
        </li>
            <li>
          <a href="admin.php">
           <i class="fa fa-user"></i> <span>Admin</span>
          </a>
        </li>
          
            <li class="active">
          <a href="client.php">
           <i class="fa fa-user"></i> <span>Client</span>
          </a>
        </li>
           <li>
          <a href="news.php">
           <i class="fa fa-user"></i> <span>News</span>
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
		<li class="active"><a href="#"> Client</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
            <!-- Main content -->
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4">
            	<a href="add_client.php" class="btn btn-primary btn-block btn-flat">Add Client</a>
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
              <h3 class="box-title" style="font-size:21px;">Client</h3>
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
                  <th>Company Name</th>
                 <th>Logo</th>
                 
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
        $query = mysql_query("SELECT* FROM `client` ORDER BY id DESC")or die(mysql_error());
       $count = mysql_num_rows($query);
                   
                       
                    
                    
        while($row = mysql_fetch_array($query)){
        $id = $row['id'];
  ?>        
				<tr>
                    <td><?php echo $c++ ?></td>
                  <td><?php echo $row['name'] ?></td>
               
                    <th>   <a href="../img/client/<?php echo $row['image']  ?>" class="prettyphoto">
                               <center> <img src="../img/client/<?php echo $row['image']  ?>" alt="" /></center> </a></th>
                 
               
                   
					  <td>
                         
                          
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


                          
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
					  <a href="delete_client.php?id=<?php echo $id; ?>" onclick="return ConfirmDelete();"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color:red;"></span></a>
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
				 <center><p >Crafted by <a href="http://wabitsolution.com/"><b>Wab IT Solution</b></a> </p></center>
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