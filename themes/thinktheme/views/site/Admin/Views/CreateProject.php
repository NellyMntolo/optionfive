<?php
include '../Model/categoryDAO.php';
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
                <li><a href="/Admin/ProjectCreate"><i class="fa fa-keyboard-o text-lime"></i>Create New Product</a></li>
                <li><a href="/Admin/ViewAllProjects/"><i class="fa fa-tv"></i>View All Products<span class="label label-primary pull-right"><?php echo $allprojects_idx; ?></span></a></li>   
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
            Create A Product
            <small>optionfive.co</small>
          </h1>
                  
        </section>
        <section class="content">


<form action="/Admin/AllProjects" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
<input type="hidden" id="category_id" name="category_id">
<input type="hidden" id="selected_category_en" name="selected_category_en" class="form-control" placeholder="" readonly>
<input type="hidden" id="selected_category_zh" name="selected_category_zh" class="form-control" placeholder="" readonly>
<button type="button" class="save-btn">Save All</button>
<!-- MODAL -->
      <div class="modal-frame">
        <div class="modal">
              <div class="modal-inset" style="">
                  <div class="button close"><i class="fa fa-close"></i></div>
        
                  <div class="modal-body">
                      <h3>Confirm</h3>
                      <p>Are you sure You want to make changes to this Page?</p>
                      <button type="submit" class="btn-success" name="create_project_submit">Submit</button>                      
                      <p class="ps"></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-overlay"></div>
<!-- MODAL -->

        <!-- General Settings -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Content Settings</h3>
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
                  </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div class="box-body pad">
                  

                    <div class="form-group">
                      <label>Page Title EN</label>
                      <div class="input-group">
                      <div class="input-group-addon ">
                        <i class="fa fa-pencil-square-o text-aqua faa-wrench animated faa-slow"></i>
                      </div>
                      <input type="text" name="general_entext1" class="form-control" placeholder="Page Title EN">
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>Page Title FR</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-pencil-square-o text-aqua faa-wrench animated faa-slow"></i>
                      </div>
                      <input type="text" name="general_zhtext1" class="form-control" placeholder="Page Title FR">
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>Page Keywords EN</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-keyboard-o text-aqua"></i>
                      </div>
                      <textarea class="form-control" rows="3" name="general_entext2" placeholder="Page Keywords EN"></textarea>
                    </div><!-- /.input group -->                      
                    </div>

                    <div class="form-group">
                      <label>Page Keywords FR</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-keyboard-o text-aqua"></i>
                      </div>
                      <textarea class="form-control" rows="3" name="general_zhtext2" placeholder="Page Keywords FR"></textarea>
                    </div><!-- /.input group -->
                    </div>


                    <div class="form-group">
                      <label>Product Main Image <small></small></label>
                      <input type="file" name="project_image1">
                    </div>

                    <div class="form-group">
                      <label>Product Back-end Image <small></small></label>
                      <input type="file" name="project_image2">
                    </div> 


                    <div class="form-group">
                      <label>Publish This Product</label>
                      <input type="hidden" name="publish" value="no">
                      <input type="checkbox" id="checker" type="checkbox" value="yes" name="publish" class="form-content">
                    </div>

                    <div class="form-group" style="opacity: 0;">
                      <label>Send to Index</label>
                      <input type="hidden" name="send_to_index" value="no">
                      <input type="checkbox" id="checker" type="checkbox" value="yes" name="send_to_index" class="form-content">
                    </div>

                </div><!-- box-body -->            
          </div><!-- /.box -->
          <!-- General Settings -->

</form>

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

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Abu's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>--><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="/themes/thinktheme/views/site/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/themes/thinktheme/views/site/Admin/Assets/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/themes/thinktheme/views/site/Admin/Assets/js/app.min.js"></script>
    <script src="/themes/thinktheme/views/site/Admin/Assets/js/modal.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>



<script type="text/javascript">
$('.selectpicker').selectpicker({
      style: 'btn-danger',
      size: 3
    });



//AJAX
$(document).ready(function(){

$("#categ-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();

    $("#category_id").val($("#form-select").val());
    $("#selected_category_en").val($("#form-select :selected").text());    
});

function submitForm(){
   var name = $("#form-select").val();
 
    $.ajax({
            type: "POST",
            //async: false,
            url:"/fetch_category",
            data: "selected_category=" + name,
            //data: $(this).serialize(),
            //dataType:"json",
            success: function (response) {
            //alert(response);  
            $("#zh_catag").val(response);
            $("#selected_category_zh").val(response);
            console.log(response);
            },            
            error: function (jXHR, textStatus, errorThrown) {
               alert(errorThrown);               
            }
        });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}


$("#form-select").on('change', function(e) {
  $("#categ-form").submit();

});

});
</script>

  </body>
</html>
