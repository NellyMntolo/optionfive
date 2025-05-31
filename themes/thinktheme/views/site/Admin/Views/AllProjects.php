<?php
include '../Model/projectDAO.php';
include '../Model/allnotificationsDAO.php';
include '../Model/session.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hovvver - think</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/skins/skin-blue.css">
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/main.css">
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/modal.css">
    <link rel="stylesheet" href="/themes/thinktheme/views/site/Admin/Assets/css/icon_animations.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="/Admin/Home/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>VR</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Hovvver</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo $login_image;?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $login_firstname." ".$login_lastname;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo $login_image;?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $login_firstname." ".$login_lastname." - ".$login_jobtitle;?>
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/Admin/Profile/" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/Admin/Logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $login_image;?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $login_firstname." ".$login_lastname;?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <!--<input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>-->
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/Admin/Home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <!--<li><a href="#"><i class="fa fa-link"></i> <span>Another PAGE LINK</span></a></li>-->
            <li class="treeview">
              <a href="#"><i class="fa fa-laptop"></i> <span>Manage Pages</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/Admin/Main/"><i class="fa fa-edit"></i>Index</a></li>
                <li><a href="/Admin/HowTo/"><i class="fa fa-edit"></i>How To</a></li>
                <li><a href="/Admin/Products/"><i class="fa fa-edit"></i>Products</a></li>
                <li><a href="/Admin/Contact/"><i class="fa fa-edit"></i>Contact</a></li>
                <li><a href="/Admin/About/"><i class="fa fa-edit"></i>About</a></li>                
                <li><a href="/Admin/Retailers/"><i class="fa fa-edit"></i>Retailers</a></li>                
              </ul>
            </li>
            <li class="treeview menu-open active">
              <a href="#"><i class="fa fa-puzzle-piece"></i> <span>Manage Products</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu menu-open">
                <li><a href="/Admin/ProjectCreate"><i class="fa fa-keyboard-o"></i>Create New Product</a></li>
                <li><a href="/Admin/ViewAllProjects/"><i class="fa fa-tv text-lime"></i>View All Products<span class="label label-primary pull-right"><?php echo $allprojects_idx; ?></span></a></li>   
                <!--<li><a href="/Admin/ViewAllProjects/"><i class="fa fa-trash"></i>Delete A Project</a></li>-->
              </ul>
            </li>
            <li><a href="/Admin/Menu/"><i class="fa fa-reorder"></i><span>Menu</span></a></li>
            <li><a href="/Admin/Footer/"><i class="fa fa-wheelchair"></i><span>Footer</span></a></li>
            <li><a href="/Admin/Profile/"><i class="fa fa-user"></i><span>Profile</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            All Products
            <small>optionfive.co</small>
          </h1>
          
        </section>

<section class="content">
        <!-- General Settings -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Current Projects</h3>
                        <form method="Post" id="categ-form-zh" accept-charset="UTF-8">
                          <select class="" name="selected_category" id="form-select">
                                <option value="">Select Order</option>
                                <option value="1">Recently Uploaded</option>
                                <option value="2">Recently Sorted</option>                               
                          </select>
                        </form>
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
                  </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div id="sorter" class="box-body pad">
                    <?php while($rowprojecten = mysql_fetch_array($retvalprojecten, MYSQL_ASSOC)){
                      $images = $rowprojecten['image2'];
                      $titles = $rowprojecten['text5'];
                      $idx = $rowprojecten['idx'];
                      $sortable_order = $rowprojecten['sortable_order'];
                              
                              echo "<div id=\"projectList_$idx\" class=\"project-list\">";
                              echo "<form action=\"/Admin/ProjectEdit\" method=\"GET\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\">";
                              echo '<img src="'.$rowprojecten['image2'].'"/>';
                              echo "<input type=\"hidden\" value=\"$idx\" name=\"project_id\">";
                              echo "<input type=\"submit\" value=\"Edit\" class=\"btn-success extra-btn\">";
                              echo "</form></div>";
                         }
                    ?>

                </div><!-- box-body -->            
          </div><!-- /.box -->
          <!-- General Settings -->
       </section> 


      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Version 2.0
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.hovvver.com/" target="_blank">Hovvver</a>.</strong> All rights reserved.
      </footer>

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!--<script src="/themes/thinktheme/views/site/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/themes/thinktheme/views/site/Admin/Assets/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/themes/thinktheme/views/site/Admin/Assets/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function(){

      $(function() {
            $('#sorter').sortable({
              placeholder: "ui-state-highlight",
              items: '.project-list',
              revert: true,
              over: function() {
                 $('.ui-state-highlight').stop().animate({
                     height: 0
                 }, 400);
              },
              change: function() {
                 $('.ui-state-highlight').stop().animate({
                     height: 200
                 }, 400);
              },
              update: function() {
                 $('.ui-state-highlight').stop().animate({
                     height: 200
                 }, 400);
              }, 

              stop: function (event, ui) {
              var data = $(this).sortable('serialize');
                  $.ajax({
                      type: "POST",
                      url:"/Admin/Sort",
                      data: data,
                      success: function (response) {
                      //alert(response);                      
                      $("#sorter").html(response); 
                      //console.log(data);
                      },            
                      error: function (jXHR, textStatus, errorThrown) {
                         alert(errorThrown);               
                      }
                  });
              }
          });
          $( "#sorter" ).disableSelection();
      });      
});
</script>

<style type="text/css">
  #sorter img:hover{
    cursor: move;
    opacity: 0.7;
    transition: all 200ms ease-in-out;
    -webkit-transition: all 200ms ease-in-out;
    -moz-transition: all 200ms ease-in-out;
    -o-transition: all 200ms ease-in-out;
  }
  .ui-state-highlight {
    width: 300px;
    height: 200px; 
    float: left; 
    background: #eee; 
    border: 1px dashed #bbb; 
    display: block;
    opacity: 0.8;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    margin-top: 20px;
    margin-left:2%;
  }
  /* sortable bug fix */
  body {
    overflow: visible;
  }
  /* sortable bug fix */
</style>



<script type="text/javascript">

$(document).ready(function(){

$("#categ-form-zh").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitFormzh();
});

function submitFormzh(){
   //var name = $("#form-select").val();
   var name = $("#form-select").val();
    $.ajax({
            type: "POST",
            url:"/Admin/ProjectSortDefault",
            data: "selected_category=" + name,
            success: function (response) {
            //alert(response);  
            $("#sorter").html(response); 
            console.log(response);
            },            
            error: function (jXHR, textStatus, errorThrown) {
               alert(errorThrown);               
            }
        });
}

$("#form-select").on('change', function(e) {
  $("#categ-form-zh").submit();
});

});
</script>



  </body>
</html>


