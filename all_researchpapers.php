
<?php include_once 'conn.php';
$_SESSION['user']=1;?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Agent | Personal</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
  <?php 
  $sql = 'SELECT * from faculty where faculty_id='.$_SESSION['user'];
  $result = mysqli_query($db_connect,$sql);
  $row = $result->fetch_assoc();
  $name = $row['Faculty_name'];
  $office_phone = $row['Faculty_office_phone'];
  $mobile_no = $row['Faculty_mobile_no'];
      $email = $row['Faculty_email'];
      $joining_date = $row['Joining_date'];
      $gender = $row['Gender'];
      $birthdate= $row['Birthdate'];
      $teaching_exp = $row['Teaching_exp'];
      $industry_exp = $row['Industry_exp'];
      $permanent_address = $row['Permanent_address'];
      $local_address = $row['Local_address'];
      $ug_university = $row['UG_university'];
      $pg_university = $row['PG_university'];
      $pan_card = $row['Pan_card'];
      $election_card = $row['Election_card'];
      $_SESSION['name']= $name;
   ?>
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">Teacher</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navigation</span>
          </a>
            
            
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <style> 
                input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
                }

                input[type=text]:focus {
        width: 100%;
                }
        </style>
                    <form>
  <input type="text" name="search" placeholder="Search..">
</form>
</li>
                <li>
                    <a href="all_researchpapers.php" class="btn btn">All Research papers</a>
                </li>
                <li>
                    <a href="all_conferences.php" class="btn btn">All Conferences</a>
                </li>
                <li>
                    <a href="all_workshops.php" class="btn btn ">All Workshops</a>
                </li>
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar5.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p><?php echo $_SESSION['name'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">My Profile</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i>  <span>Personal Information</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="teacher_profile.php"><i class="fa fa-circle-o"></i> Details </a></li>
                <li><a href="password.php"><i class="fa fa-circle-o"></i> Uploads </a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> 
                <span> Research Papers</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="4wheeler.php"><i class="fa fa-circle-o"></i>in Journals </a></li>
                <li><a href="3wheeler.php"><i class="fa fa-circle-o"></i>in Conference </a></li>
               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> 
                <span> Workshops</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Conducted </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Attended </a></li>
              </ul>
            </li>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> 
                <span> Conferences</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Organised </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Attended </a></li>
              </ul>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid" style="margin:20px;">
          
         <h3>Research Paper in Conference</h3>
            <?php
    $sql = "SELECT * from researchpaper_in_conference";
	$result = mysqli_query($db_connect,$sql);
                      $ctr=10;
                      echo ' <table class="table table-striped"><thead>
    <th>'.'Name'.'</th><th>'.'Domain'.'</th><th>'.'Date'.'</th><th>'.'Duration'.'</th><th>'.'</th></thead>';
	while(($row = $result->fetch_assoc()) && $ctr > 0)
	{
        $ctr--;
       
		echo '<tr><td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Domain'].'</td>';
        echo '<td>'.$row['Date'].'</td>';
        echo '<td>'.$row['Duration'].'</td>';
            
	}
                      echo '</table>';
?>
            <h3>Research Papers in Journal</h3>
            <?php
    $sql = "SELECT * from researchpaper_in_journal";
	$result = mysqli_query($db_connect,$sql);
                      $ctr=10;
                      echo ' <table class="table table-striped"><thead>
    <th>'.'Name'.'</th><th>'.'ISSN'.'</th><th>'.'Domain'.'</th><th>'.'Date of Publication'.'</th><th>'.'Page no.'.'</th></thead>';
	while(($row = $result->fetch_assoc()) && $ctr > 0)
	{
        $ctr--;
       
		echo '<tr><td>'.$row['Name'].'</td>';
        echo '<td>'.$row['ISSN'].'</td>';
        echo '<td>'.$row['Domain'].'</td>';
        echo '<td>'.$row['Date_of_publication'].'</td>';
        echo '<td>'.$row['Page_no'].'</td></tr>';
        
        
	}
                      echo '</table>';
?>
        </div>

<style type="text/css">
  
</style>
<script type="text/javascript">
$(document).ready(function()

{
  $("#uploadfield").hide();
  $(':input').attr('readonly','readonly');
  $('#city,#state').attr('disabled',true);


  $('#changefield').click(function()

{
 $(':input').attr('readonly',false);
  $('#city,#state').attr('disabled',false);
  $('#uploadfield').show();
  $('#changefield').hide();

}
    );


  $('#uploadfield').click(function()

{
 $(':input').attr('readonly',true);
  $('#city,#state').attr('disabled',true);
  $('#uploadfield').hide();
  $('#changefield').show();

}
    );

});

</script>
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>