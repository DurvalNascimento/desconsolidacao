<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HDTRANS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Data table -->
    <link href="../../style/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../style/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../../style/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../style/dist/css/skins/_all-skins.min.css">

  </br>
  </br>
  </br>

  
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
          <!-- Logo -->
          <a href="/auth/kpi" class="logo navbar-fixed-top">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b>HD</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>DESCONSOL</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" id="menu" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
              
                <li class="dropdown tasks-menu">
                 
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Create a nice theme
                              <small class="pull-right">40%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
              <ul class="nav navbar-nav">
                <li><a href="\">Home</a></li>
              </ul>
                  
           

                </li>
              </ul>
            </div>
          </nav>

      </header>
      </br>
  </br>
  </br>
      @yield('content')
      

    

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../../style/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../style/plugins/datatables/dataTables.bootstrap.min.js"></script>

     

    <!-- jQuery UI 1.11.4 -->
    <script src="../../style/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../style/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../style/dist/js/app.min.js"></script>
  


    <!--meu-->
    <script src="../../style/mainjs/mainjs.js"></script>
    

  </body>

</html>